<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'profile',
        'description',
    ];

    public function members()
    {
        return $this->hasMany(GroupMember::class);
    }
}
