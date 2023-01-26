<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * @method static create(string[] $array)
 */
class Video extends Model
{
    protected $fillable = ['name'];

    public function tags(): MorphToMany
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
