<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_products', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->timestamps();
        });
        Schema::table('cart_products', function (Blueprint $table) {
            $table->foreignId('products_id')->references('id')->on('products');
            $table->foreignId('carts_id')->references('id')->on('carts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart_products', function (Blueprint $table) {
            $table->dropForeign(['products_id'])->references('id')->on('products');
            $table->dropForeign(['carts_id'])->references('id')->on('carts');
        });
        Schema::dropIfExists('cart_products');
    }
}
