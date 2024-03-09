<?php
// Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description', 'media_id'];

    public static function isMediaItemUsed($mediaItemId)
    {
        return self::where('media_id', $mediaItemId)->exists();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function media()
    {
        return $this->belongsTo(Media::class);
    }
}
?>
