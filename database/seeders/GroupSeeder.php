<?php

namespace Database\Seeders;

use App\Models\Group;
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
        Group::create([
            'name' => 'MCA',
            'description' => 'MCA Group',
            'user_id' => 1,
            'profile' => 'template\assets\img\avatar-1.jpg',
        ]);
        Group::create([
            'name' => 'BCA',
            'description' => 'BCA Group',
            'user_id' => 2,
            'profile' => 'template\assets\img\avatar-2.jpg',
        ]);
    }
}
