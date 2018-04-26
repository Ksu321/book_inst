<?php

namespace App\Model;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    const IS_DRAFT = 0;
    const IS_PUBLIC = 1;

    protected $fillable =['name', 'link'];

    public static function add($fields)
    {
        $partner = new static;
        $partner->fill($fields);
        $partner->save();
        return $partner;
    }


    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }

    public function uploadImage($image)
    {
        if ($image == null) { return; }
        $this->removeImage();
        $filename = str_random(10).'.'. $image->extension();
        $image->storeAs('uploads/pages/partners/', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/pages/partners/' . $this->image);
        }
    }

    public function getImage()
    {
        if ($this->image == null) { return 'img/no-img.png'; }
        return '/uploads/pages/partners/' . $this->image;
    }

    public function setDraft()
    {
        $this->status = 0;
        $this->save();
    }

    public function setPublic()
    {
        $this->status = 1;
        $this->save();
    }

    public function toggleStatus($value)
    {
        if($value == null)
        {
            return $this->setDraft();
        }

        return $this->setPublic();
    }
}
