<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHeader extends Model
{
    use HasFactory;
    protected $fillable = ['userID', 'promoID', 'payment_method', 'status'];
}
