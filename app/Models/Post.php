<?php

namespace Animex\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Post extends Model
{
    protected $fillable = [
      'category_id',
      'user_id',
      'title',
      'slug',
      'image',
      'image_alt',
      'content',
      'active',
      'seo_title',
      'seo_description',
      'meta_robots',
    ];

    /**
     * Get the user that the post belongs to.
     *
     * @return Relation
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
