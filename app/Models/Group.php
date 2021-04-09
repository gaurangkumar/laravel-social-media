<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;

    protected $fillable = array(
        'user_id',
        'name',
        'profile',
        'description',
    );

    public function members()
    {
        return $this->hasMany(GroupMember::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
