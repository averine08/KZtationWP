<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('penggunas')->insert([
            ['name' => 'Manusia', 
            'email' => 'manusia@gmail.com', 
            'password' => bcrypt('manusiasakti'), 
            'role' => 'admin',
            'country' => 'Indonesia', 
            'city' => 'Jakarta Timur', 
            'address' => 'jl. a', 
            'postalcode' => '11111'],

            ['name' => 'test', 
            'email' => 'test@gmail.com', 
            'password' => bcrypt('test123'), 
            'role' => 'customer',
            'country' => 'Indonesia', 
            'city' => 'Jakarta Pusat', 
            'address' => 'jl. a', 
            'postalcode' => '12222'],

            ['name' => 'oke', 
            'email' => 'oke@gmail.com', 
            'password' => bcrypt('oke123'), 
            'role' => 'customer',
            'country' => 'Indonesia', 
            'city' => 'Jakarta Selatan', 
            'address' => 'jl. a', 
            'postalcode' => '13333']
        ]);
    }
}
