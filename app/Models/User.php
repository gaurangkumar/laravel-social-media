<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array(
        'name',
        'email',
        'password',
        'mobile',
        'profile',
        'address',
    );

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = array(
        'password',
        'remember_token',
    );

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = array(
        'email_verified_at' => 'datetime',
    );

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

    public function businesses()
    {
        return $this->hasMany(Business::class);
    }

    public function posts()
    {
        return $this->hasMany(PagePost::class);
    }

    public function followers()
    {
        return $this->hasMany(PageFollower::class);
    }
}
