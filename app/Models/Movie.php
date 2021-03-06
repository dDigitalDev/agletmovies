<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'movies';

    /**
     * Blacklist.
     *
     * Allow for mass Update
     *
     * @var string
     */
    protected $guarded = [];
}
