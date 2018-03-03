<?php

namespace Animex\Models;

use Illuminate\Database\Eloquent\Model;

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
}
