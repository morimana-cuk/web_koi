<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kualitas extends Model
{
    use HasFactory;

    protected $table = 'kualitas_air';
    protected $id = 'id';
    protected $guarded = [];

}
