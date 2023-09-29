<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urhajos extends Model
{
    use HasFactory;


    protected $primaryKey = "azonosito";

    protected $fillable = [
        'nev',
        'szuletes',
        'urhajoId'
    ];


}
