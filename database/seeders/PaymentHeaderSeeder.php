<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('payment_headers')->insert([[
            'userID' => '2',
            'payment_method' =>'Mastercard',
            'status'=>'Paid'
        ],
        [
            'userID' => '3',
            'payment_method' =>'Paypal',
            'status'=>'Paid'
        ]
        ]);
    }
}
