<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class business extends Model
{
    use HasFactory;
    protected $fillable = array(
        'name',
        'btype',
        'profile',
        'address',
        'user_id',
        'description',
       
    );
}
