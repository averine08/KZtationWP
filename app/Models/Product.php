<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['artist_id', 'ProductName', 'ProductPhoto', 'ProductCat', 'ProductPrice', 'ProductReleaseDate', 'ProductRegion', 'ProductManufacturer', 'ProductContent', 'ProductLinkYoutube', 'ProductStock'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}