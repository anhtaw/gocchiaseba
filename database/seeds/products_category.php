<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class products_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    $data = [
        [
            'name' => 'Giáo Trình',
        ],
        ['name' => 'Đồ dùng cá nhân',

        ],
        ['name' => 'Đồ ăn',

        ],
    ];
    DB::table('products_category')->insert($data);
    }
}
