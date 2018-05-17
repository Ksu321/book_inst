<?php

namespace App\Model\BookShop;


use App\Model\BaseModel;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class Statistic extends BaseModel
{
    use Sluggable;

    protected $fillable = ['title', 'description', 'image', 'content',
        'file', 'date', 'front_image'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}