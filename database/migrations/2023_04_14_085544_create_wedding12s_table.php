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
        Schema::create('wedding12s', function (Blueprint $table) {
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
            $table->string('fotoSampul1');
            $table->string('fotoSampul2');
            $table->string('fotoSampul3');
            $table->string('tempatLahirPria');
            $table->string('tempatLahirPerempuan');
            $table->string('video');
            $table->json('galery');
            $table->string('fotoPria');
            $table->string('fotoPerempuan');
            $table->string('linkMap');
            $table->dateTime('tanggalResepsi');
            $table->text('map');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wedding12s');
    }
};
