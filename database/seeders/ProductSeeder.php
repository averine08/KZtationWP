<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $timestamp = Carbon::now();
        DB::table('products')->insert([
        ['artist_id' => '1', 
        'ProductName' => 'New Jeans - NewJeans', 
        'ProductPhoto'=> 'assets/Album/newjeans-albumnewjeans.jpg', 
        'ProductCat' => '1', 
        'ProductPrice' => '1000000', 
        'ProductReleaseDate' => '2022-08-01', 
        'ProductRegion' => 'Korea', 
        'ProductManufacturer' => 'Hybe', 
        'ProductContent' => 'lorem ipsum', 
        'ProductLinkYoutube' => 'https://youtube.com/playlist?list=OLAK5uy_lnEFuNDiwH42yjMhiZYX8VKWzdqgQNzvA&si=hJrAz2qibiIfzbtz', 
        'ProductStock' => '6',
        'created_ad' => $timestamp,
    ],

        ['artist_id' => '1', 
        'ProductName' => 'New Jeans - Get Up', 
        'ProductPhoto'=> 'assets/Album/getup-albumnewjeans.jpg', 
        'ProductCat' => '1', 
        'ProductPrice' => '1000000', 
        'ProductReleaseDate' => '2023-07-21', 
        'ProductRegion' => 'Korea', 
        'ProductManufacturer' => 'Hybe', 
        'ProductContent' => 'lorem ipsum', 
        'ProductLinkYoutube' => 'https://youtube.com/playlist?list=OLAK5uy_mBRM8NMgE_F9JTRA7zKpmETOh0H1VnPe4&si=-gKwqXHRzAdGwNkk', 
        'ProductStock' => '10',
        'created_ad' => $timestamp,
    ],

        ['artist_id' => '1', 
        'ProductName' => 'New Jeans - Get Up', 
        'ProductPhoto'=> 'assets/Album/getup-albumnewjeans.jpg', 
        'ProductCat' => '1', 
        'ProductPrice' => '1000000', 
        'ProductReleaseDate' => '2023-07-21', 
        'ProductRegion' => 'Korea', 
        'ProductManufacturer' => 'Hybe', 
        'ProductContent' => 'lorem ipsum', 
        'ProductLinkYoutube' => 'https://youtube.com/playlist?list=OLAK5uy_mBRM8NMgE_F9JTRA7zKpmETOh0H1VnPe4&si=-gKwqXHRzAdGwNkk', 
        'ProductStock' => '10',
        'created_ad' => $timestamp,
    ],

        ['artist_id' => '1', 
        'ProductName' => 'New Jeans - Get Up', 
        'ProductPhoto'=> 'assets/Album/getup-albumnewjeans.jpg', 
        'ProductCat' => '1', 
        'ProductPrice' => '1000000', 
        'ProductReleaseDate' => '2023-07-21', 
        'ProductRegion' => 'Korea', 
        'ProductManufacturer' => 'Hybe', 
        'ProductContent' => 'lorem ipsum', 
        'ProductLinkYoutube' => 'https://youtube.com/playlist?list=OLAK5uy_mBRM8NMgE_F9JTRA7zKpmETOh0H1VnPe4&si=-gKwqXHRzAdGwNkk', 
        'ProductStock' => '10',
        'created_ad' => $timestamp,
        ],
        ]);
        
    }
}
