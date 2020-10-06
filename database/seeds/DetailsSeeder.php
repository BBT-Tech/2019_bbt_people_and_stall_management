<?php

use Illuminate\Database\Seeder;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('details')->insert([
            [
                'user_id' => 1,
                'name' => 'SuperRoot',
                'sex' => '不明',
                'avatar' => '/storage/avatars/1.jpg',
                'birth' => '2019-01-01',
                'mobile' => '13600000000'
            ],
            // [
            //     'user_id' => 2,
            //     'name' => 'cbf',
            //     'sex' => '男',
            //     'avatar' => '/storage/avatars/2.jpg',
            //     'birth' => '1998-02-18',
            //     'mobile' => '15521236000'
            // ],
            // [
            //     'user_id' => 3,
            //     'name' => 'lzk',
            //     'sex' => '男',
            //     'avatar' => '/storage/avatars/2.jpg',
            //     'birth' => '2000-06-08',
            //     'mobile' => '18520775522'
            // ],
        ]);
    }
}
