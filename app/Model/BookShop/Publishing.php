<?php


namespace App\Model\BookShop;

use App\Model\BaseModel;
use App\Model\Specialization;
use Illuminate\Support\Facades\Storage;

class Publishing extends BaseModel
{
    protected $fillable = ['name', 'description', 'image', 'reward', 'prize', 'address',
        'address_url', 'phone', 'email', 'year', 'city'
        ];

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
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
        $image->storeAs('uploads/articles/publishing/', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/articles/publishing/' . $this->image);
        }
    }

    public function getImage()
    {
        if ($this->image == null) { return 'img/no-img.png'; }
        return '/uploads/articles/publishing/' . $this->image;
    }

    public function setSpecialization($id)
    {
        if ($id ==null ) { return;}
        $this->specialization_id = $id;
        $this->save();
    }

    public function getSpecializationID()
    {
        return $this->specialization != null ? $this->specialization->id : 'Нет спеціалізації';
    }

    public function getSpecializationTitle()
    {
        return ($this->specialization != null)
            ?   $this->specialization->title
            :   'Спеціалізація відсутня';
    }
}