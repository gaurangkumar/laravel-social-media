<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profile',
        'uname',
        'user_id',
        'description',
        'banner',
    ];

    public function followers()
    {
        return $this->hasMany(PageFollower::class);
    }

    public function posts()
    {
        return $this->hasMany(PagePost::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(PageComment::class, 'id');
    }

    public function likes()
    {
        return $this->hasMany(PageLike::class, 'id');
    }
}
