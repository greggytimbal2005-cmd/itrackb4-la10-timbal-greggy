<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        DB::enableQueryLog();

        $genreId = $request->query('genre_id');
            
        $query = Movie::with('genre');

        if ($genreId) {
            $query = $query->where('genre_id', $genreId);
        }

        $movies = $query->get();

        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();

        return view('movies.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'year' => 'required',
            'genre_id' => 'required|exists:genres,id',
        ]);

        Movie::create($validated);

        return redirect()->route('movies.index');
    }

       public function show(Movie $movie)
   {
       return view('movies.show', compact('movie'));
   }

    public function featured()
    {
        //
    }

    public function filter($genre)
    {
        //
    }

    public function edit(Movie $movie)
    {
      $genres = Genre::all(); 
      return view('movies.edit', compact('movie', 'genres'));
    } 

    public function update(Request $request, Movie $movie)
    {
    $validated = $request->validate([
    'name'        => 'required|string|max:255',
    'genre_id'    => 'required|exists:genres,id',
    'year'        => 'nullable|integer',
    'is_favorite' => 'required|boolean',
    'notes'       => 'nullable|string',
  ]);

     $movie->update($validated);

     return redirect()->route('movies.index');
    }

    public function destroy(Movie $movie)
{
    $movie->delete();

    return redirect()->route('movies.index');
}
}