<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku_Favorit extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_buku',
    ];
}
