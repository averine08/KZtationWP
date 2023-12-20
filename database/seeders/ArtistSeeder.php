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
                'artist_photo' => 'assets/Artistss/NewJeans.jpeg',
                'artist_agency' => 'Hybe'
            ],
            [
                'artist_name' => 'Aespa',
                'artist_photo' => 'assets/Artistss/aespa.jpg',
                'artist_agency' => 'SM'
            ],
            [
                'artist_name' => 'Ive',
                'artist_photo' => 'assets/Artistss/ive.jpg',
                'artist_agency' => 'Starship'
            ],
            [
                'artist_name' => 'Enhypen',
                'artist_photo' => 'assets/Artistss/enhypen.png',
                'artist_agency' => 'Hybe'
            ],
            [
                'artist_name' => 'KissofLife',
                'artist_photo' => 'assets/Artistss/Kissoflife.jpg',
                'artist_agency' => 'Hybe'
            ]
        ]);
    }
}
