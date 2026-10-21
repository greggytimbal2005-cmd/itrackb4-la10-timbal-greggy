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

            <form method="POST"
                  action="{{ route('movies.store') }}">

                @csrf


                <!-- TITLE -->

                <div class="mb-3">

                    <label for="title"
                           class="form-label">

                        Movie Title

                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        class="form-control @error('title') is-invalid @enderror"
                        placeholder="Enter movie title"
                    >

                    @error('title')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                    @enderror

                </div>


                <!-- GENRE -->

                <div class="mb-3">

                    <label for="genre"
                           class="form-label">

                        Genre

                    </label>

                    <select name="genre_id">
                      @foreach ($genres as $genre)
                      <option value="{{ $genre->id }}"
                      @selected(old('genre_id') == $genre->id)
                     >{{ $genre->name }}</option>
                        @endforeach
                    </select>


                    @error('genre')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                    @enderror

                </div>


                <!-- DURATION -->

                <div class="mb-3">

                    <label for="duration"
                           class="form-label">

                        Duration (minutes)

                    </label>

                    <input
                        type="number"
                        id="duration"
                        name="duration"
                        value="{{ old('duration') }}"
                        class="form-control @error('duration') is-invalid @enderror"
                        placeholder="Example: 120"
                    >

                    @error('duration')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                    @enderror

                </div>


                <!-- YEAR -->

                <div class="mb-3">

                    <label for="year"
                           class="form-label">

                        Release Year

                    </label>

                    <input
                        type="number"
                        id="year"
                        name="year"
                        value="{{ old('year') }}"
                        class="form-control @error('year') is-invalid @enderror"
                        placeholder="Example: 2024"
                    >

                    @error('year')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                    @enderror

                </div>


                <!-- FEATURED -->

                <div class="mb-4">

                    <label for="featured"
                           class="form-label">

                        Featured Movie

                    </label>

                    <select
                        id="featured"
                        name="featured"
                        class="form-select @error('featured') is-invalid @enderror"
                    >

                        <option value="">
                            Select an option
                        </option>

                        <option value="1"
                            @selected(old('featured') === '1')>
                            Yes
                        </option>

                        <option value="0"
                            @selected(old('featured') === '0')>
                            No
                        </option>

                    </select>


                    @error('featured')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                    @enderror

                </div>


                <!-- SUBMIT -->

                <button type="submit"
                        class="btn btn-primary">

                    Add Movie

                </button>


                <a href="{{ route('movies.index') }}"
                   class="btn btn-secondary">

                    Cancel

                </a>

            </form>

        </div>

    </div>

</div>

@endsection