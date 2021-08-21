<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = time();

        $u = 8;
        for ($s = 1; $s <= $u; $s++) {
            for ($r = 1; $r <= $u; $r++) {
                if ($s !== $r) {
                    Contact::create([
                        'user_id' => $s,
                        'cid' => $r,
                        'created_at' => date('Y-m-d H:i:s', $datetime),
                    ]);
                    $datetime = strtotime('+1 minutes', $datetime);
                }
            }
        }
    }
}
