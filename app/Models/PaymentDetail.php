<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    use HasFactory;
    protected $fillable = ["payment_header_ID", "product_ID", "product_quantity"];
    public function paymentHeader()
    {
        return $this->belongsTo(PaymentHeader::class, 'payment_header_ID');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_ID');
    }
}
