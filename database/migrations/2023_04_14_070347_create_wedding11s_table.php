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
        Schema::create('wedding11s', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('namaPriaLengkap');
            $table->string('namaPanggilanPria');
            $table->string('namaPerempuanLengkap');
            $table->string('namaPanggilanPerempuan');
            $table->string('namaBapakPerempuan');
            $table->string('namaIbuPerempuan');
            $table->string('namaIbuPria');
            $table->string('namaBapakPria');
            $table->string('anakKeBerapaPria');
            $table->string('tempatLahirPria');
            $table->string('linkIgPria');
            $table->string('linkTwPria');
            $table->string('tempatLahirPerempuan');
            $table->string('anakKeBerapaPerempuan');
            $table->string('linkIgPerempuan');
            $table->string('linkTwPerempuan');
            $table->string('alamat1');
            $table->string('linkMap1');
            $table->string('awalTanggal1');
            $table->string('akhirTanggal1');
            $table->string('alamat2');
            $table->string('linkMap2');
            $table->string('awalTanggal2');
            $table->string('alamat3');
            $table->string('linkMap3');
            $table->string('awalTanggal3');
            $table->string('lokasi1');
            $table->string('lokasi2');
            $table->string('lokasi3');
            $table->string('tanggal1');
            $table->string('tanggal2');
            $table->string('tanggal3');
            $table->string('namaRekening');
            $table->string('noRekening');
            $table->string('Rumah');
            $table->string('alamat4');
            $table->string('cerita1');
            $table->string('cerita2');
            $table->string('cerita3');
            $table->text('ourQuote');
            $table->string('video');
            $table->string('fotoPria');
            $table->string('fotoPerempuan');
            $table->json('galery');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Wedding11');
    }
};
