<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;

class Admin extends User
{
    use HasFactory;

    protected $guarded = array('id');

    protected $hidden = array(
        'password', 'remember_token',
    );

    public function getAuthPassword()
    {
        return $this->password;
    }
}
