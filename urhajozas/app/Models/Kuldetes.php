<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuldetes extends Model
{
    use HasFactory;

    protected $primaryKey = "kod_id";


    protected $fillable = [
        'nev',
        'cel',
        'kezdes',
        'befejezve'
    ];



}

