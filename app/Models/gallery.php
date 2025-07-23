<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery'; // Nama tabel di database
    protected $fillable = [
        'images', 'description', 'status',
    ];
}