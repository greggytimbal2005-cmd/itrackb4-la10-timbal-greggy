<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function movies()
    {
        return [
            1 => ['id' => 1, 'name' => 'Spiderman', 'genre' => 'Action', 'year' => '2001'],
            2 => ['id' => 2, 'name' => 'Batman', 'genre' => 'Action', 'year' => '2003'],
            3 => ['id' => 3, 'name' => 'Tarzan', 'genre' => 'Adventure', 'year' => '2000'],
        ];
    }

    public function index()
{
    $movies = Movie::all();
    return view('movies.index', compact('movies'));
}

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

   public function show($id)
{
    $movie = Movie::findOrFail($id);
    return view('movies.show', compact('movie'));
}

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

   
}