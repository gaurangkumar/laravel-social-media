<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('chats')->truncate();

        $this->call(array(
            UserSeeder::class,
            ChatSeeder::class,
        ));

        // \App\Models\User::factory(10)->create();
    }
}
