<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('payment_details')->insert([[
            'payment_header_ID' => '1',
            'product_ID' => '1',
            'product_quantity' => '2',
        ],
        [
            'payment_header_ID' => '1',
            'product_ID' => '2',
            'product_quantity' => '1',
        ]
    ]);
    }
}
