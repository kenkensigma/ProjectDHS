<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us'; // Nama tabel di database
    protected $fillable = [
        'deskripsi', 'image'
    ];
}
