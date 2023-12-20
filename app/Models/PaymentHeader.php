<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHeader extends Model
{
    protected $fillable = ['userID', 'payment_method', 'status'];

    
    
}
