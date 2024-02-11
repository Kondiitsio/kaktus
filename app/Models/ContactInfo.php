<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;

    protected $table = 'contact_info';
    protected $fillable = ['city', 'street_address', 'zip_code', 'email', 'phone', 'open_hours'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
