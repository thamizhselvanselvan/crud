<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testuser extends Model
{
    use HasFactory;
    protected $table="testusers";
    protected $fillable=[
       'firstname',
       'lastname',
       'email',
    ];
}
