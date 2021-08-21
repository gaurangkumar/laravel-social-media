<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Vivek Patel',
            'email' => 'vivek@abc.com',
            'profile' => 'template\assets\img\avatar-1.jpg',
            'password' => bcrypt('12345678'), //Hash::make('12345678'),
        ]);
        User::create([
            'name' => 'Gaurang Parmar',
            'email' => 'gaurang@abc.com',
            'profile' => 'template\assets\img\avatar-2.jpg',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Himani Prajapati',
            'email' => 'himani@abc.com',
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
            'profile' => 'template\assets\img\jack-sparrow.jpg',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Harry Potter',
            'email' => 'harry@abc.com',
            'profile' => 'template\assets\img\harry-potter.jpg',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Hermione Granger',
            'email' => 'hermione@abc.com',
            'profile' => 'template\assets\img\hermione-granger.jpg',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Sherlock Holmes',
            'email' => 'sherlock@abc.com',
            'profile' => 'template\assets\img\sherlock-holmes.jpg',
            'password' => bcrypt('12345678'),
        ]);
    }
}
