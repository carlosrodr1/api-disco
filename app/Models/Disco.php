<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{   
    use HasFactory;
    protected $fillable = [
        'album',
        'faixa',
    ];
}