<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etusivu extends Model
{
    use HasFactory;

    protected $table = 'etusivu';

    // The attributes that are mass assignable.
    protected $fillable = ['title', 'sub_title'];
}
