<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'name', 'certificate', 'thumbnail', 'type', 'status',
        'price', 'level', 'description', 'mentor_id'
    ];

    public function mentor()
    {
        // retunr $this->belongsTo('App\Mentor');
    }
}
