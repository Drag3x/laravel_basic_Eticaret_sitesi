<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('product_kat_id')->nullable();
            $table->string('product_name');
            $table->longText('product_text');
            $table->string('product_images');
            $table->string('product_money');
            $table->enum("okunan",[0,1])->default(0);
            $table->enum("betseller",[0,1])->default(0);
            $table->enum("coksatan",[0,1])->default(0);
            $table->string('product_selflink');
            $table->foreign('product_kat_id')->references('id')->on('kategoris')->cascadeOnDelete();
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
