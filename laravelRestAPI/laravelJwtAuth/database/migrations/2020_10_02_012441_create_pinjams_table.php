<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamsTable extends Migration
{
    /**ab
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjams', function (Blueprint $table) {
            $table->bigIncrements('id_pinjam');
            $table->unsignedBigInteger('nim');
            $table->unsignedBigInteger('kode_buku');
            $table->date('tanggal_pinjam');
            $table->date('batas_pinjam');
            $table->date('pengembalian_pinjam')->nullable();
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('nim')->references('nim')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode_buku')->references('kode_buku')->on('bukus')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjams');
    }
}
