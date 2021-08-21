<?php

namespace Database\Seeders;

use App\Models\GroupMember;
use Illuminate\Database\Seeder;

class GroupMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = 8;
        $datetime = strtotime('+1 minutes');
        for ($s = 1; $s <= $u; $s++) {
            for ($r = 1; $r <= 2; $r++) {
                GroupMember::create([
                    'user_id' => $s,
                    'group_id' => $r,
                    'created_at' => date('Y-m-d H:i:s', $datetime),
                ]);
                $datetime = strtotime('+1 minutes', $datetime);
            }
        }
    }
}
