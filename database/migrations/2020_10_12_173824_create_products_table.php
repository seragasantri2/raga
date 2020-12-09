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
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->bigInteger('main_id')->unsigned();
            $table->foreign('main_id')->references('id')->on('sub_kategoris');
            $table->bigInteger('sub_id')->unsigned();
            $table->foreign('sub_id')->references('id')->on('kat_kategoris');
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->integer('harga');
            $table->integer('harga_reseller');
            $table->integer('stok');
            $table->string('image')->nullable();
            $table->integer('berat')->nullable();
            $table->integer('panjang')->nullable();
            $table->integer('lebar')->nullable();
            $table->string('tinggi')->nullable();
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
