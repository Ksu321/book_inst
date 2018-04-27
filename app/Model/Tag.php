<?php

namespace App\Model;

use App\Model\Actual\Announcement;
use App\Model\Actual\BookNews;
use App\Model\Actual\News;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tag extends Model
{
    use Sluggable;

    protected $fillable =['title'];

    public function announcements()
    {
        return $this->morphedByMany(Announcement::class, 'taggable');
    }

    public function news()
    {
        return $this->morphedByMany(News::class, 'taggable');
    }

    public function bookNews()
    {
        return $this->morphedByMany(BookNews::class, 'taggable');
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
