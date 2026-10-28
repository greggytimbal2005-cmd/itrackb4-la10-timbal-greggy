@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h1>Add New Movie</h1>

            <p class="text-muted">
                Add a new movie to the database.
            </p>

        </div>

        <a href="{{ route('movies.index') }}"
           class="btn btn-secondary">

            ← Back to Movies

        </a>

    </div>


    <div class="card">

        <div class="card-header bg-dark text-white">

            Add Movie

        </div>


        <div class="card-body">

            <form action="{{ route('movies.update', $movie) }}" method="POST">
               @csrf
               @method('PUT')


                <!-- TITLE -->

                <<div class="mb-3">
    <label for="name" class="form-label">Movie Title</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror"
           id="name" name="name"
           value="{{ old('name', $movie->name) }}">
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="genre_id" class="form-label">Genre</label>
    <select class="form-select" id="genre_id" name="genre_id">
        @foreach ($genres as $genre)
            <option value="{{ $genre->id }}"
                    @selected(old('genre_id', $movie->genre_id) == $genre->id)>
                {{ $genre->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="year" class="form-label">Release Year</label>
    <input type="number" class="form-control @error('year') is-invalid @enderror"
           id="year" name="year"
           value="{{ old('year', $movie->year) }}">
    @error('year')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="is_favorite" class="form-label">Featured Movie</label>
    <select class="form-select" id="is_favorite" name="is_favorite">
        <option value="1" @selected((string) old('is_favorite', $movie->is_favorite) === '1')>Yes</option>
        <option value="0" @selected((string) old('is_favorite', $movie->is_favorite) === '0')>No</option>
    </select>
</div>

<div class="mb-3">
    <label for="notes" class="form-label">Notes</label>
    <textarea class="form-control" id="notes" name="notes" rows="4">{{ old('notes', $movie->notes) }}</textarea>
</div>

<button type="submit" class="btn btn-primary">Update Movie</button>
<a href="{{ route('movies.index') }}" class="btn btn-secondary">Cancel</a>
        

            </form>

        </div>

    </div>

</div>

@endsection