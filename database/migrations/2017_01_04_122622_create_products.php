<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('name', 255);
            $table->bigInteger('amount');
            $table->integer('stock')->default(0);
            $table->bigInteger('discount')->nullable();
            $table->integer('cat_id');
            $table->longText('description')->nullable();
            $table->longText('review')->nullable();
            $table->string('img');
            $table->text('list_img');
            $table->text('slug');
            $table->tinyInteger('status');
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
