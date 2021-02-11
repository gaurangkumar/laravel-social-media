<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'Jone Doe',
            'email' => 'admin@abc.com',
            'password' => bcrypt('12345678'), //Hash::make($data['password']),
        ]);

        DB::table('users')->insert([
            'name' => 'himani',
            'email' => 'himani@abc.com',
            'password' => bcrypt('12345678'), //Hash::make($data['password']),
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
