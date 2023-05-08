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
        Schema::create('wedding2s', function (Blueprint $table) {
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
            $table->string('alamat1');
            $table->string('alamat2');
            $table->string('anakKeBerapaPria');
            $table->string('anakKeBerapaPerempuan');
            $table->string('linkMap1');
            $table->string('linkMap2');
            $table->string('fotoSampul');
            $table->string('fotoWanita');
            $table->string('fotoPria');
            $table->dateTime('tanggal1');
            $table->dateTime('tanggal2');
            $table->text('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wedding2s');
    }
};
