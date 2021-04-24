<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create(array(
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'profile' => 'template\assets\img\avatar-1.jpg',
            'password' => 'admin',
        ));
    }
}
