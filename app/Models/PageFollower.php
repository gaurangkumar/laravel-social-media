<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageFollower extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'page_id',
        'follow',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pages()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }
}
