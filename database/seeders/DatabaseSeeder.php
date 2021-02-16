<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Database\Seeders\UserSeeder;
use Database\Seeders\ChatSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		(new ChatSeeder)->run();
		//(new UserSeeder)->run();
        //DB::table('users')->truncate();
        // \App\Models\User::factory(10)->create();
    }
}
