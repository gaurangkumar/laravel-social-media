<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rid',
        'group_id',
		'msg',

    ];

	public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

	public function recievers()
    {
        return $this->belongsTo(User::class, 'rid');
    }
}
