<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $table = 'mentors';

    protected $cats = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'update' => 'datetime:Y-m-d H:m:s',
    ];

    protected $fillable = [
        'name', 'profile', 'email', 'profession',
    ];
}
