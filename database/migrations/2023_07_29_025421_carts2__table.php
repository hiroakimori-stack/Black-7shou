<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts2', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('ユーザーID');
            $table->unsignedBigInteger('item_id')->comment('商品ID');
            $table->unsignedBigInteger('order_id')->comment('注文ID');
            $table->decimal('price')->nullable()->comment('価格');
            $table->integer('quantity')->nullable()->comment('数量');
            $table->decimal('subtotal')->nullable()->comment('小計');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users2')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts2');
    }
};
