<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Media extends Model
{
    public function hero()
    {
        return $this->hasOne(Hero::class); // or $this->hasMany(Hero::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'file_name',
        'category',
    ];

    /**
     * Get the user that owns the media.
     */

}
