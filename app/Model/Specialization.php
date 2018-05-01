<?php


namespace App\Model;


use App\Model\BookShop\Publishing;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use Sluggable;

    protected $fillable =['title'];

    public function publishing()
    {
        return $this->hasMany(
            Publishing::class
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