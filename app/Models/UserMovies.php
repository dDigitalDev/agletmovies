<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMovies extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'usermovies';

    protected $fillable = [
        'user_id',
        'movie_id'
    ];

    /**
     * Blacklist.
     *
     * Allow for mass Update
     *
     * @var string
     */
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('\App\Models\User');
    }
}
