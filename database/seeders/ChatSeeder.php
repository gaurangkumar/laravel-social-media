<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $msgs = ['what up?', 'hello', 'good morning', 'hey', 'how\'s it going', 'good night', 'good afternoon', 'Welcome', 'how are you'];
        mt_srand((float) microtime() * 1000000);

        $datetime = time();

        $u = 8;
        for ($s = 1; $s <= $u; $s++) {
            for ($r = 1; $r <= $u; $r++) {
                if ($s !== $r) {
                    $n = mt_rand(0, count($msgs) - 1);
                    Chat::create([
                        'user_id' => $s,
                        'rid' => $r,
                        'msg' => $msgs[$n],
                        'created_at' => date('Y-m-d H:i:s', $datetime),
                    ]);
                    $datetime = strtotime('+1 minutes', $datetime);
                }
            }
        }

        $u = 8;
        for ($s = 1; $s <= $u; $s++) {
            for ($r = 1; $r <= 2; $r++) {
                $n = mt_rand(0, count($msgs) - 1);
                Chat::create([
                    'user_id' => $s,
                    'group_id' => $r,
                    'msg' => $msgs[$n],
                    'created_at' => date('Y-m-d H:i:s', $datetime),
                ]);
                $datetime = strtotime('+1 minutes', $datetime);
            }
        }

        foreach ($msgs as $msg) {
            $s = mt_rand(1, 8);
            $r = mt_rand(1, 8);
            if ($s === $r) {
                if ($r === 8) {
                    $r = 1;
                } else {
                    $r++;
                }
            }
            Chat::create([
                'user_id' => $s,
                'rid' => $r,
                'msg' => $msg,
                'created_at' => date('Y-m-d H:i:s', $datetime),
            ]);
            $datetime = strtotime('+1 minutes', $datetime);
        }
    }
}
