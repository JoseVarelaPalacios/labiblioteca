<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    /** @use HasFactory<\Database\Factories\GenerosFactory> */
    use HasFactory;
    protected $fillable=['genero'];
}
