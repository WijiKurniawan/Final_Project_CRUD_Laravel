<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->text('NIP');
            $table->text('Nama');
            $table->text('Alamat');
            $table->text('TempatLahir');
            $table->date('TanggalLahir');
            $table->text('Agama');
            $table->enum('JenisKelamin', ['L', 'P']);
            $table->text('NoHP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
