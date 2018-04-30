<?php


namespace App\Model\BookShop;

use App\Model\BaseModel;
use Illuminate\Support\Facades\Storage;

class Publishing extends BaseModel
{
    protected $fillable = ['name', 'description', 'image', 'reward', 'prize', 'address',
        'address_url', 'phone', 'email', 'year', 'city'
        ];

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
}