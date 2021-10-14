<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('orders')->truncate();
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'customer_id' => 1
            ],
            [
                'id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'customer_id' => 2
            ],
            [
                'id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'customer_id' => 3
            ],
            [
                'id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'customer_id' => 4
            ],
            [
                'id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'customer_id' => 5
            ],
            [
                'id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'customer_id' => 1
            ],
            [
                'id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'customer_id' => 2
            ],
            [
                'id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'customer_id' => 3
            ],
            [
                'id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'customer_id' => 4
            ],
            [
                'id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'customer_id' => 5
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
