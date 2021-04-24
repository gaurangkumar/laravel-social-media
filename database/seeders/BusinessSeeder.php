<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Business;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Business::create(array(
            'name' => 'XYZ',
            'btype' => 'Grocery Store',
            'address' => 'Delhi',
            'description' => 'Grocery',
            'user_id' => 1,
			'website' => 'abc.com',
            'profile' => 'template\assets\img\avatar-1.jpg',
        ));
        Business::create(array(
            'name' => 'ABC',
            'btype' => 'Cloth Store',
            'address' => 'Mumbai',
            'description' => 'Grocery',
            'user_id' => 2,
			'website' => 'abc.com',
            'profile' => 'template\assets\img\avatar-2.jpg',
        ));
    }
}
