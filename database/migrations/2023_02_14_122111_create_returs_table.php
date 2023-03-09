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
        Schema::create('returs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pembelian_id')->required();
            $table->unsignedBigInteger('barang_id')->required();
            $table->integer('jumlah_barang')->required();
            $table->integer('total_harga_retur')->required();
            $table->date('tgl_retur')->required();
            $table->timestamps();
            // 
            $table->foreign('pembelian_id')->references('id')->on('pembelians')->onDelete('restrict');
            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('returs');
    }
};
