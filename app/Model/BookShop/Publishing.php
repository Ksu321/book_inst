<?php


namespace App\Model\BookShop;

use App\Model\Actual\BookNews;
use App\Model\Authors\Author;
use App\Model\Authors\Illustrator;
use App\Model\Authors\Interpreter;
use App\Model\BaseModel;
use App\Model\Specialization;
use Illuminate\Support\Facades\Storage;

class Publishing extends BaseModel
{


    protected $fillable = ['name', 'description', 'image', 'ukrainian_prizes', 'international_prizes', 'address',
        'address_url', 'phone', 'email', 'year', 'city', 'authors_name',
        'illustrators_name', 'interpreters_name', 'booksnews_name'
        ];

    public function bookNews()
    {
        return $this->morphToMany(BookNews::class, 'book_relationships');
    }

    public function authors()
    {
        return $this->morphedByMany(Author::class, 'publishing_relationships');
    }

    public function illustrators()
    {
        return $this->morphedByMany(Illustrator::class, 'publishing_relationships');
    }

    public function interpreters()
    {
        return $this->morphedByMany(Interpreter::class, 'publishing_relationships');
    }

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }


}