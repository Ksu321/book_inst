<?php


namespace App\Model;


use App\Model;
use Illuminate\Support\Facades\Storage;

class Catalog extends BaseModel
{
    protected $fillable = ['name', 'description', 'link', 'year'
    ];



}