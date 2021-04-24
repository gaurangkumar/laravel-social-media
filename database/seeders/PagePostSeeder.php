<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PagePost;

class PagePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PagePost::create(array(
            'page_id' => 1,
            'user_id' => 1,
			'text' => 'Good morning',
            'media' => 'template\assets\img\avatar-1.jpg',
        ));
        PagePost::create(array(
            'page_id' => 2,
            'user_id' => 2,
			'text' => 'Good morning',
            'media' => 'template\assets\img\avatar-2.jpg',
        ));
    }
}
