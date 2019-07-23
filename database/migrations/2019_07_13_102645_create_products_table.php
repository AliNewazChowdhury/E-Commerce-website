<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->text('description');
            $table->integer('buy');
            $table->integer('sell');
            $table->integer('offer');
            $table->integer('stock');
            $table->integer('alert');
            $table->integer('visibility')->default(1);
            $table->integer('sl');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('categ_id');
            $table->foreign('categ_id')->references('id')->on('product_categories');
            $table->unsignedBigInteger('sub_id');
            $table->foreign('sub_id')->references('id')->on('product_sub_categories');
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
        Schema::dropIfExists('products');
    }
}
