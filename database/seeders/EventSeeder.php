<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('events')->truncate();

        \Illuminate\Support\Facades\DB::table('events')->insert([
            [
                'eventName' => 'Summer Vacation 1',
                'bandNames' => 'Marron 5',
                'startDate' => Carbon::tomorrow(),
                'endDate' => Carbon::now()->addDays(2),
                'portfolio' => 'Tan',
                'ticketPrice' => '10000',
                'status' => '1',
            ],
            [
                'eventName' => 'Summer Vacation 2',
                'bandNames' => 'Marron 5',
                'startDate' => Carbon::tomorrow(),
                'endDate' => Carbon::now()->addDays(2),
                'portfolio' => 'Tan',
                'ticketPrice' => '10000',
                'status' => '2',
            ],
            [
                'eventName' => 'Summer Vacation 3',
                'bandNames' => 'Marron 5',
                'startDate' => Carbon::tomorrow(),
                'endDate' => Carbon::now()->addDays(2),
                'portfolio' => 'Tan',
                'ticketPrice' => '10000',
                'status' => '3',
            ],
            [
                'eventName' => 'Summer Vacation 4',
                'bandNames' => 'Marron 5',
                'startDate' => Carbon::tomorrow(),
                'endDate' => Carbon::now()->addDays(2),
                'portfolio' => 'Tan',
                'ticketPrice' => '10000',
                'status' => '0',
            ],
            [
                'eventName' => 'Summer Vacation 5',
                'bandNames' => 'Marron 5',
                'startDate' => Carbon::tomorrow(),
                'endDate' => Carbon::now()->addDays(2),
                'portfolio' => 'Tan',
                'ticketPrice' => '10000',
                'status' => '0',
            ],
            [
                'eventName' => 'Summer Vacation 6',
                'bandNames' => 'Marron 5',
                'startDate' => Carbon::tomorrow(),
                'endDate' => Carbon::now()->addDays(2),
                'portfolio' => 'Tan',
                'ticketPrice' => '10000',
                'status' => '1',
            ],
            [
                'eventName' => 'Summer Vacation 7',
                'bandNames' => 'Marron 5',
                'startDate' => Carbon::tomorrow(),
                'endDate' => Carbon::now()->addDays(2),
                'portfolio' => 'Tan',
                'ticketPrice' => '10000',
                'status' => '3',
            ],
            [
                'eventName' => 'Summer Vacation 8',
                'bandNames' => 'Marron 5',
                'startDate' => Carbon::tomorrow(),
                'endDate' => Carbon::now()->addDays(2),
                'portfolio' => 'Tan',
                'ticketPrice' => '10000',
                'status' => '2',
            ],
            [
                'eventName' => 'Summer Vacation 9',
                'bandNames' => 'Marron 5',
                'startDate' => Carbon::tomorrow(),
                'endDate' => Carbon::now()->addDays(2),
                'portfolio' => 'Tan',
                'ticketPrice' => '10000',
                'status' => '3',
            ],
            [
                'eventName' => 'Summer Vacation 10',
                'bandNames' => 'Marron 5',
                'startDate' => Carbon::tomorrow(),
                'endDate' => Carbon::now()->addDays(2),
                'portfolio' => 'Tan',
                'ticketPrice' => '10000',
                'status' => '0',
            ],
            [
                'eventName' => 'Summer Vacation 11',
                'bandNames' => 'Marron 5',
                'startDate' => Carbon::tomorrow(),
                'endDate' => Carbon::now()->addDays(2),
                'portfolio' => 'Tan',
                'ticketPrice' => '10000',
                'status' => '1',
            ],
            [
                'eventName' => 'Summer Vacation 12',
                'bandNames' => 'Marron 5',
                'startDate' => Carbon::tomorrow(),
                'endDate' => Carbon::now()->addDays(2),
                'portfolio' => 'Tan',
                'ticketPrice' => '10000',
                'status' => '2',
            ],
            [
                'eventName' => 'Summer Vacation 13',
                'bandNames' => 'Marron 5',
                'startDate' => Carbon::tomorrow(),
                'endDate' => Carbon::now()->addDays(2),
                'portfolio' => 'Tan',
                'ticketPrice' => '10000',
                'status' => '3',
            ]
        ]);

        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
