<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Himani Prajapati',
            'email' => 'himani@abc.com',
            'profile' => 'template\assets\img\avatar-1.jpg',
            'password' => bcrypt('12345678'), //Hash::make($data['password']),
        ]);
        User::create([
            'name' => 'Gaurang Parmar',
            'email' => 'gaurang@abc.com',
            'profile' => 'template\assets\img\avatar-2.jpg',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Vivek Patel',
            'email' => 'vivek@abc.com',
            'profile' => 'template\assets\img\avatar-3.jpg',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Priya Patel',
            'email' => 'priya@abc.com',
            'profile' => 'template\assets\img\avatar-4.jpg',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Jack Sparrow',
            'email' => 'jack@abc.com',
            'profile' => 'template\assets\img\avatar-5.jpg',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Harry Potter',
            'email' => 'harry@abc.com',
            'profile' => 'template\assets\img\avatar-6.jpg',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Hermione Granger',
            'email' => 'hermione@abc.com',
            'profile' => 'template\assets\img\avatar-7.jpg',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Sherlock Holmes',
            'email' => 'sherlock@abc.com',
            'profile' => 'template\assets\img\avatar-8.jpg',
            'password' => bcrypt('12345678'),
        ]);
    }
}
