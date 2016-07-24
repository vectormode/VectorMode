<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefundsMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refunds_meta', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('refund_id')->unsigned();
            $table->foreign('refund_id')->references('id')->on('refunds')->onDelete('cascade');
            $table->decimal('price', 15, 2);
            $table->decimal('qty', 15, 2);
            $table->decimal('vat', 15, 2);
            $table->decimal('row_total_price', 15, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('refunds_meta');
    }
}
