<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'name' => 'Himani Prajapati',
            'email' => 'himani@abc.com',
            'profile' => 'template\assets\img\avatar-1.jpg',
            'password' => bcrypt('12345678'), //Hash::make($data['password']),
        ));
    }
}
