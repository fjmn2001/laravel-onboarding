<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsRequest extends Model
{
    use HasFactory;

    protected $guarded =['id'];
    protected $table="itemsrequests";
    protected $fillable=['product_name','amount'];

    public function requestOrder(){

        return $this->belongsTo(RequestOrder::class);

    }
}
