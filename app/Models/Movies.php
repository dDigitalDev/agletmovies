<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'movies';

    protected $fillable = [
        'movie_id',
        'title',
        'description',
        'poster',
        'release_date',

    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('\App\Models\User');
    }
}
