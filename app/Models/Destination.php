<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Post
 *
 * @mixin Builder
 */
class Destination extends Model
{
    use HasFactory;

    protected $table = 'destinations';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];
}


