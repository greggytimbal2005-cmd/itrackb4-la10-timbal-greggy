<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model
{
    protected $fillable = ['name', 'genre_id', 'year', 'is_favorite', 'notes'];
    protected $casts = [
        'year' => 'integer',
    ];

    public function genre(): BelongsTo   // singular
    {
        return $this->belongsTo(Genre::class);
    }
}