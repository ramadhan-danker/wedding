<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wedding1s', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('namaPriaLengkap');
            $table->string('namaPerempuanLengkap');
            $table->string('namaPanggilanPria');
            $table->string('namaPanggilanPerempuan');
            $table->string('namaBapakPerempuan');
            $table->string('namaIbuPerempuan');
            $table->string('namaIbuPria');
            $table->string('namaBapakPria');
            $table->string('alamat');
            $table->string('anakKeBerapaPria');
            $table->string('anakKeBerapaPerempuan');
            $table->string('fotoSampul');
            $table->string('fotoAkhir');
            $table->string('fotoPria');
            $table->string('fotoWanita');
            $table->string('linkMap');
            $table->dateTime('tanggalResepsi');
            $table->dateTime('tanggalAkadNikah');
            $table->text('map');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wedding1s');
    }
};
