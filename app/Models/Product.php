<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'discount',
        'description',
        'img',
        'business_id',

    ];

    public function businesses()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }
}
