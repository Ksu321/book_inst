<?php


namespace App\Model\Authors;


use App\Model\Actual\BookNews;
use App\Model\BaseModel;
use App\Model\BookShop\Publishing;
use Illuminate\Support\Facades\Storage;

class Author extends BaseModel
{
    protected $fillable = ['name', 'email', 'biography', 'address_url', 'phone', 'image', 'publishings_name',
        'booksnews_name', 'twitter', 'google', 'youtube', 'facebook', 'instagram'
    ];


    public function bookNews()
    {
        return $this->morphToMany(BookNews::class, 'book_relationships');
    }

    public function publishings()
    {
        return $this->morphToMany(Publishing::class, 'publishing_relationships');
    }



}