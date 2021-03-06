<?php

namespace App\Model;

use App\Model\Actual\Announcement;
use App\Model\Actual\BookNews;
use App\Model\Actual\News;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;

    protected $fillable =['title'];

    public function announcements()
    {
        return $this->hasMany(
            Announcement::class,
            News::class
            );
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
