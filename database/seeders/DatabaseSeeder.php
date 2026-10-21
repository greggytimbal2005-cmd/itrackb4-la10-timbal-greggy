<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $action = Genre::create(['name' => 'Action']);
        $adventure = Genre::create(['name' => 'Adventure']);
        $drama = Genre::create(['name' => 'Drama']);

        Movie::create([
            'name' => 'Spiderman',
            'year' => '2001',
            'genre_id' => $action->id,
            'is_favorite' => false,
            'notes' => null,
        ]);

        Movie::create([
            'name' => 'Batman',
            'year' => '2003',
            'genre_id' => $action->id,
            'is_favorite' => false,
            'notes' => null,
        ]);

        Movie::create([
            'name' => 'Tarzan',
            'year' => '2000',
            'genre_id' => $adventure->id,
            'is_favorite' => false,
            'notes' => null,
        ]);

        Movie::create([
            'name' => 'The Dark Knight',
            'year' => '2008',
            'genre_id' => $action->id,
            'is_favorite' => false,
            'notes' => null,
        ]);

        Movie::create([
            'name' => 'Up',
            'year' => '2009',
            'genre_id' => $drama->id,
            'is_favorite' => false,
            'notes' => null,
        ]);
    }
}