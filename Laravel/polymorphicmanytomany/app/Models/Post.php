<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    protected $fillable=['name'];
    public function tags(): MorphToMany
    {
        return $this->morphToMany('App\Models\Tag','taggable');
    }
}
