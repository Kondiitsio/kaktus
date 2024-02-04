<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yhteystiedot extends Model
{
    use HasFactory;

    protected $table = 'yhteystiedot';

    // The attributes that are mass assignable.
    protected $fillable = ['title', 'content'];
}
