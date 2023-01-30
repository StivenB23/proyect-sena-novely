<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Novelty extends Model
{
    use HasFactory;
    protected $fillable = [
        'url_evidence',
        'date_novelty',
        'date_resolved',
    ];

    
}
