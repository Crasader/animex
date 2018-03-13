<?php

namespace Animex\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Tag extends Pivot
{
    protected $fillable = ['name', 'slug'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
