<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        'title',
        'description',
        'url',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);     // relationship one to one: 1 profile -> 1 user
    }

    // relationship many to many: 1 profile -> + followers
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
