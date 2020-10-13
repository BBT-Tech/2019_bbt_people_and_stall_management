<?php

use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('departments')->insert([
            [
                'name' => '技术部',
                'introduction' => '技术部主要负责对百步梯网站、软件的开发与维护。用键盘敲击精彩，用代码续写辉煌。'
            ],
            [
                'name' => '行政人事部',
                'introduction' => ''
            ],
            [
                'name' => '新媒体部',
                'introduction' => ''
            ],
            [
                'name' => '视频部',
                'introduction' => ''
            ],
            [
                'name' => '运营推广部',
                'introduction' => ''
            ],
            [
                'name' => '节目部',
                'introduction' => ''
            ],
            [
                'name' => '视觉设计部',
                'introduction' => ''
            ],
            [
                'name' => '常委',
                'introduction' => ''
            ]
        ]);
    }
}
