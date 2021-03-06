<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsZTable extends Migration
{
    public function up()
    {
        Schema::create('order_items_Z', function (Blueprint $table) {
            $table->id();
            $table->string('product_name', 50);
            $table->integer('amount');
            $table->double('price');
            $table->double('subtotal');
            $table->unsignedBigInteger('purchase_order_id');
            $table->foreign('purchase_order_id')->references('id')->on('purchase_orders')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_items_Z');
    }
}
