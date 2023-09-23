<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuldetes extends Model
{
    use HasFactory;

    protected $primaryKey = "kod_nev";
    

    protected $fillable = [
        'nev',
        'cel',
        'kezdes',
        'befejezve'
    ];
}
