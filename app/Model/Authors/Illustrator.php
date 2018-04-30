<?php

namespace App\Model\Authors;


use App\Model\BaseModel;
use Illuminate\Support\Facades\Storage;

class Illustrator extends BaseModel
{

    protected $fillable = ['name', 'email', 'biography', 'address_url', 'phone', 'image'];



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
        $image->storeAs('uploads/articles/illustrators/', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/articles/illustrators/' . $this->image);
        }
    }

    public function getImage()
    {
        if ($this->image == null) { return 'img/no-img.png'; }
        return '/uploads/articles/illustrators/' . $this->image;
    }

}