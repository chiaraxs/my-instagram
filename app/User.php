<?php

namespace App;

use App\Mail\NewUserWelcome;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;



class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Boot Method -> This method is called after all other service providers have been registered, 
    // meaning you have access to all other services that have been registered by the framework:
    protected static function boot()
    {

        parent::boot();

        static::created(function ($user) {
            $user->profile()->create([
                'title' => $user->username,
            ]);

            Mail::to($user->email)->send(new NewUserWelcome());
        });
    }

    // relationship one to one: 1 profile -> 1 user
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // relationship many to many: 1 profile -> + posts (desc)
    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }

    // relationship many to many: 1 user -> + profile follows
    public function following()
    {
        return $this->belongsToMany(Profile::class);
    }
}
