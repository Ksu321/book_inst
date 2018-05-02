<?php


namespace App\Model\Authors;


use App\Model\Actual\BookNews;
use App\Model\BaseModel;
use App\Model\BookShop\Publishing;
use Illuminate\Support\Facades\Storage;

class Author extends BaseModel
{
    protected $fillable = ['name', 'email', 'biography', 'address_url', 'phone', 'image'];


    public function bookNews()
    {
        return $this->morphedByMany(BookNews::class, 'authoretables');
    }


    public function publishings()
    {
        return $this->morphedByMany(Publishing::class, 'authoretables');
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
        $image->storeAs('uploads/articles/authors/', $filename);
        $this->image = $filename;
        $this->save();


    }

    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/articles/authors/' . $this->image);
        }
    }

    public function getImage()
    {
        if ($this->image == null) { return 'img/no-img.png'; }
        return '/uploads/articles/authors/' . $this->image;
    }

    public function setBookNews($ids)
    {
//        if ($ids == null) { return;}
        $this->bookNews()->sync($ids);
    }

    public function getBookNewsTitles()
    {
        return (!$this->bookNews->isEmpty())
            ?   implode(', ', $this->bookNews->pluck('name_book')->all())
            : 'Книги відсутні';
    }

    public function setPublishings($ids)
    {
//        if ($ids == null) { return;}
        $this->publishings()->sync($ids);
    }


    public function getPublishingsTitles()
    {
        return (!$this->publishings->isEmpty())
            ?   implode(', ', $this->publishings->pluck('name')->all())
            : 'Видавництва відсутні';
    }

}