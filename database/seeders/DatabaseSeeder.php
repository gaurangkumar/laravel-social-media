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

        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            ContactSeeder::class,
            PageSeeder::class,
            PageFollowerSeeder::class,
            PagePostSeeder::class,
            PageLikeSeeder::class,
            PageCommentSeeder::class,
            GroupSeeder::class,
            GroupMemberSeeder::class,
            ChatSeeder::class,
            BusinessSeeder::class,
            ProductSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
