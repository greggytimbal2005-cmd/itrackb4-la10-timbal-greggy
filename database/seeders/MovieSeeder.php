<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
        'name' => 'Parasite',
        'genre' => 'Thriller',
        'year' => 2019,
        'is_favorite' => true,
        'notes' => null,
   
        ]);

        Movie::create([
            'name' => 'cathy',
            'genre' => 'Drama',
            'year' => 2026,
            'is_favorite' => true,
            'notes' => null,
        ]);

        Movie::create([
            'name' => 'optimum pride',
            'genre' => 'Action',
            'year' => 2023,
            'is_favorite' => true,
            'notes' => null,
        ]);

        Movie::create([
            'name' => 'lamok',
            'genre' => 'Comedy',
            'year' => 2016,
            'is_favorite' => true,
            'notes' => null,
        ]);
    }
}
