<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'name' => 'duc'.str_random(10).'duc',
            'detail' => str_random(10),           ]);
           }
}
