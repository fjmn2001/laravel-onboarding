<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseItem extends Model
{
    use HasFactory;

    protected $table = "order_items_Z";

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
