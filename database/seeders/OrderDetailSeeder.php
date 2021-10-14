<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('order_details')->truncate();
        \Illuminate\Support\Facades\DB::table('order_details')->insert([
            [
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'amount' => 100000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
                'amount' => 20000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 2,
                'product_id' => 3,
                'quantity' => 1,
                'amount' => 50000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 2,
                'product_id' => 4,
                'quantity' => 1,
                'amount' => 150000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 3,
                'product_id' => 5,
                'quantity' => 1,
                'amount' => 45000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 3,
                'product_id' => 6,
                'quantity' => 1,
                'amount' => 25000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 4,
                'product_id' => 7,
                'quantity' => 1,
                'amount' => 20000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 4,
                'product_id' => 8,
                'quantity' => 1,
                'amount' => 25000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 5,
                'product_id' => 9,
                'quantity' => 1,
                'amount' => 20000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 5,
                'product_id' => 10,
                'quantity' => 1,
                'amount' => 10000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 6,
                'product_id' => 1,
                'quantity' => 1,
                'amount' => 100000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 6,
                'product_id' => 2,
                'quantity' => 1,
                'amount' => 20000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 7,
                'product_id' => 3,
                'quantity' => 1,
                'amount' => 50000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 7,
                'product_id' => 4,
                'quantity' => 1,
                'amount' => 150000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 8,
                'product_id' => 5,
                'quantity' => 1,
                'amount' => 45000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 8,
                'product_id' => 6,
                'quantity' => 1,
                'amount' => 25000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 9,
                'product_id' => 7,
                'quantity' => 1,
                'amount' => 20000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 9,
                'product_id' => 8,
                'quantity' => 1,
                'amount' => 25000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 10,
                'product_id' => 9,
                'quantity' => 1,
                'amount' => 20000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 10,
                'product_id' => 10,
                'quantity' => 1,
                'amount' => 10000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 1,
                'product_id' => 3,
                'quantity' => 1,
                'amount' => 50000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 2,
                'product_id' => 5,
                'quantity' => 1,
                'amount' => 45000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 3,
                'product_id' => 9,
                'quantity' => 1,
                'amount' => 20000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 4,
                'product_id' => 1,
                'quantity' => 1,
                'amount' => 100000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 5,
                'product_id' => 5,
                'quantity' => 1,
                'amount' => 45000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 6,
                'product_id' => 9,
                'quantity' => 1,
                'amount' => 20000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 7,
                'product_id' => 1,
                'quantity' => 1,
                'amount' => 100000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 8,
                'product_id' => 7,
                'quantity' => 1,
                'amount' => 20000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 9,
                'product_id' => 2,
                'quantity' => 1,
                'amount' => 20000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'order_id' => 10,
                'product_id' => 1,
                'quantity' => 1,
                'amount' => 100000,
                'created_at'=>Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
