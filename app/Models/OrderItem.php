<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = "order_items";

    protected $fillable = [

        'product_name',
        'amount',
        'price',
        'subtotal',
    ];

    public function orderTable()
    {

        return $this->belongsTo(PurchaseOrder::class);
    }
}
