<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'name' => 'MCA',
            'description' => 'MCA Group',
            'uname' => 'mca',
            'user_id' => 1,
            'profile' => 'template\assets\img\avatar-1.jpg',
        ]);
        Page::create([
            'name' => 'BCA',
            'description' => 'BCA Group',
            'uname' => 'bca',
            'user_id' => 2,
            'profile' => 'template\assets\img\avatar-1.jpg',
        ]);
    }
}
