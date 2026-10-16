<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
        protected $fillable = ['name', 'genre', 'year', 'is_favorite', 'notes'];

  protected function casts(): array
  {
    return [
        'is_favorite' => 'boolean',
        'year' => 'integer',
    ];
  }
}
