<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = array(
        'name',
        'price',
        'discount',
        'description',
        'img',
        'business_id',

    );

}
