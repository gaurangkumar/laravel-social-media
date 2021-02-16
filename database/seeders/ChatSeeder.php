<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chat;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chat::create([
            'user_id' => 1,
            'rid' => 2,
            'msg' => 'hi',
        ]);
        Chat::create([
            'user_id' => 2,
            'rid' => 1,
            'msg' => 'Hello',
        ]);
        Chat::create([
            'user_id' => 1,
            'rid' => 3,
            'msg' => 'Good morning',
        ]);
        Chat::create([
            'user_id' => 3,
            'rid' => 1,
            'msg' => 'Good night',
        ]);

        Chat::create([
            'user_id' => 3,
            'rid' => 1,
            'msg' => 'Good night',
        ]);
    }
}
