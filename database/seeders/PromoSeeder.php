<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promos')->insert([
            [
            'promo_code' => 'Flashsale 50%',
            'value' => '0.5'
            ],
            [
            'promo_code' => 'Flashsale 20%',
            'value' => '0.2'
            ],
            [
            'promo_code' => 'Flashsale 10%',
            'value' => '0.1'
            ],
            [
            'promo_code' => 'Christmas Discount',
            'value' => '0.25'
            ]
        ]);
    }
}
