<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'caption',
        'image',
    ];


    // relationship many to many: 1 profile -> + posts
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
