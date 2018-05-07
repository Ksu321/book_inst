<?php

namespace App\Model\BookShop;


use App\Model\BaseModel;
use Illuminate\Support\Facades\Storage;

class Statistic extends BaseModel
{

    protected $fillable = ['title', 'description', 'image', 'content',
        'file', 'date', 'front_image'
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
        $image->storeAs('uploads/articles/statistics/', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/articles/statistics/' . $this->image);
        }
    }

    public function getImage()
    {
        if ($this->image == null) { return 'img/no-img.png'; }
        return '/uploads/articles/statistics/' . $this->image;
    }

    public function del()
    {
        $this->removeFile();
        $this->delete();
    }

    public function uploadFile($file)
    {
        if ($file == null) { return; }
        $this->removeFile();
        $filename = '.'. $file->extension();
        $file->storeAs('uploads/articles/statistics/', $filename);
        $this->file = $filename;
        $this->save();
    }

    public function removeFile()
    {
        if($this->file != null)
        {
            Storage::delete('uploads/articles/statistics/' . $this->file);
        }
    }

    public function getFile()
    {
        if ($this->file == null) { return null; }
        return '/uploads/articles/statistics/' . $this->file;
    }
}