<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Manusia', 
            'email' => 'manusia@gmail.com', 
            'password' => 'manusiasakti', 
            'role' => 'admin',
            'phonenumber' => "080000000000",
            'country' => 'Indonesia', 
            'city' => 'Jakarta Timur', 
            'address' => 'jl. a', 
            'postalcode' => '11111'],

            ['name' => 'test', 
            'email' => 'test@gmail.com', 
            'password' =>'test123', 
            'role' => 'customer',
            'phonenumber' => "091234567890",
            'country' => 'Indonesia', 
            'city' => 'Jakarta Pusat', 
            'address' => 'jl. a', 
            'postalcode' => '12222'],

            ['name' => 'oke', 
            'email' => 'oke@gmail.com', 
            'password' => 'oke123', 
            'role' => 'customer',
            'phonenumber' => '081298765432',
            'country' => 'Indonesia', 
            'city' => 'Jakarta Selatan', 
            'address' => 'jl. a', 
            'postalcode' => '13333']
        ]);
    }
}
