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
        Schema::table('barangs', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('pemasok_id')->nullable()->after('harga');
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
        Schema::table('barangs', function (Blueprint $table) {
            //
            $table->dropForeign('pemasok_id');
            $table->dropColumn('pemasok_id');
        });
    }
};
