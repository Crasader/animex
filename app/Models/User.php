<?php

namespace Animex\Models;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'first_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the posts for the user.
     *
     * @return Relation
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
