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
        Schema::create('carts3', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id')->comment('商品ID');
            $table->decimal('price')->nullable()->comment('価格');
            $table->integer('quantity')->nullable()->comment('数量');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts3');
    }
};
