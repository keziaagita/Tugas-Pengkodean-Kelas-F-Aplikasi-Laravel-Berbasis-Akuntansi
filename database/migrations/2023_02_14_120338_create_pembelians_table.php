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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barang_id')->required();
            $table->unsignedBigInteger('pemasok_id')->required();
            $table->integer('jumlah_barang')->required();
            $table->integer('harga_beli')->required();
            $table->date('tgl_beli')->required();
            $table->timestamps();
            // 
            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('restrict');
            $table->foreign('pemasok_id')->references('id')->on('pemasoks')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelians');
    }
};
