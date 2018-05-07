<?php

namespace App\Model\Actual;

use App\Model\Authors\Author;
use App\Model\Authors\Illustrator;
use App\Model\Authors\Interpreter;
use App\Model\BaseModel;
use App\Model\BookShop\Publishing;
use App\Model\Tag;
use App\Model\User;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class BookNews extends BaseModel
{

    protected $fillable = ['title','content', 'date', 'description',
        'name_book', 'number_pages', 'genre_book',
        'annotation', 'year_publish', 'publishings_name', 'authors_name',
        'illustrators_name', 'interpreters_name'
    ];

    public function publishings()
    {
        return $this->morphedByMany(Publishing::class, 'book_relationships');
    }

    public function authors()
    {
        return $this->morphedByMany(Author::class, 'book_relationships');
    }

    public function illustrators()
    {
        return $this->morphedByMany(Illustrator::class, 'book_relationships');
    }

    public function interpreters()
    {
        return $this->morphedByMany(Interpreter::class, 'book_relationships');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
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
        $image->storeAs('uploads/articles/booknews/', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/articles/booknews/' . $this->image);
        }
    }

    public function getImage()
    {
        if ($this->image == null) { return 'img/no-img.png'; }
        return '/uploads/articles/booknews/' . $this->image;
    }


}