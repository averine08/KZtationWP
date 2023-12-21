<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Artist;
class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->insert([
            [
                'artist_name' => 'NewJeans',
                'artist_photo' => 'assets/Artists/newjeans.jpeg',
                'artist_agency' => 'Hybe'
            ],
            [
                'artist_name' => 'Aespa',
                'artist_photo' => 'assets/Artists/aespa.jpg',
                'artist_agency' => 'SM'
            ],
            [
                'artist_name' => 'Ive',
                'artist_photo' => 'assets/Artists/ive.jpg',
                'artist_agency' => 'Starship'
            ],
            [
                'artist_name' => 'Enhypen',
                'artist_photo' => 'assets/Artists/enhypen.png',
                'artist_agency' => 'Hybe'
            ],
            [
                'artist_name' => 'KissofLife',
                'artist_photo' => 'assets/Artists/Kissoflife.jpg',
                'artist_agency' => 'Hybe'
            ]
        ]);
    }
}
