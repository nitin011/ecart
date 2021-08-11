<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id');
            $table->integer('product_variant_id')->nullable();
            $table->double('quantity_value', 8, 2)->default(0.0);
            $table->string('quantity_unit')->nullable();
            $table->double('mrp', 8, 2)->default(0.0);
            $table->double('price', 8, 2)->default(0.0);
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('variant_image')->nullable();
            $table->longText('extra_data')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
