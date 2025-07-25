<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients'; // Nama tabel di database
    protected $fillable = [
        'logo'
    ];
}
