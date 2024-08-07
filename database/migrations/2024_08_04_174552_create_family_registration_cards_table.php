<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyRegistrationCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_registration_cards', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('no_kk')->unique(); // Nomor Kartu Keluarga
            $table->string('kepala_keluarga'); // Nama Kepala Keluarga
            $table->text('alamat'); // Alamat Lengkap
            $table->string('rt')->nullable(); // RT
            $table->string('rw')->nullable(); // RW
            $table->string('kelurahan'); // Kelurahan
            $table->string('kecamatan'); // Kecamatan
            $table->string('kabupaten_kota'); // Kabupaten/Kota
            $table->string('provinsi'); // Provinsi
            $table->enum('golongan_keluarga',['Mampu','Tidak Mampu'])->nullable(); // golongan_keluarga
            $table->timestamps(); // Created at & Updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_registration_cards');
    }
}
