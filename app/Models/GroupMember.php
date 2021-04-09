<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupMember extends Model
{
    use HasFactory;

    protected $fillable = array(
        'user_id',
        'group_id',
    );

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
