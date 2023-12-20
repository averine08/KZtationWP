<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $fillable = ['artist_photo', 'artist_agency', "artist_name"];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
