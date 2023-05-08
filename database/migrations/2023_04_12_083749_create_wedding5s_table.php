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
        Schema::create('wedding5s', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
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
            $table->string('linkMap');
            $table->string('video');
            $table->string('tempatLahirPria');
            $table->string('tempatLahirPerempuan');
            $table->text('doa');
            $table->text('map');
            $table->json('galery');
            $table->dateTime('tanggalResepsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wedding5s');
    }
};