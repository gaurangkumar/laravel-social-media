<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;

class Admin extends User
{
    use HasFactory;
	use Notifiable;

    //protected $guarded = ['id'];

    protected $table = 'admins';
    protected $guard = 'admin';

    protected $fillable = array(
        'name',
        'email',
        'password',
    );

	protected $hidden = array(
        'password',
        'remember_token',
    );

    protected $casts = array(
        'email_verified_at' => 'datetime',
    );

    public function getAuthPassword()
    {
        return $this->password;
    }
}
