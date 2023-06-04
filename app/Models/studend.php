<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studend extends Model
{
    use HasFactory;
    protected $table = "studends";
    protected $fillable = [
        'name',
        'class',
    ];
}
