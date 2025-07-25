<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = 'programs'; // Nama tabel di database
    protected $fillable = [
        'name', 'duration', 'description'
    ];
}
