<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $table = 'mentors';

    protected $fillable = [
        'name', 'profile', 'email', 'professin',
    ];
}
