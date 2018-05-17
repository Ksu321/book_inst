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
    use Sluggable;
    protected $fillable = ['title','content', 'date', 'description',
        'name_book', 'number_pages', 'genre_book',
        'annotation', 'year_publish', 'publishings_name', 'authors_name',
        'illustrators_name', 'interpreters_name'
    ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

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



}