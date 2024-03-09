<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $table = 'hero';

    // The attributes that are mass assignable.
    protected $fillable = ['title', 'subtitle', 'media_id'];

    public static function isMediaItemUsed($mediaId)
    {
        return self::where('media_id', $mediaId)->exists();
    }

    public function media()
    {
        return $this->belongsTo(Media::class);
    }
}
