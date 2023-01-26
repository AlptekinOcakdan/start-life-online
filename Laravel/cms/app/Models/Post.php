<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static find($id)
 * @method static onlyTrashed()
 * @method static create(string[] $array)
 */
class Post extends Model
{
    /*protected $table = 'posts';
    protected $primaryKey='post_id';*/

    protected $fillable=[
      'title',
      'content'
    ];

    public function user(): BelongsTo
    {
        return $this -> belongsTo('App\Models\User');
    }
}
