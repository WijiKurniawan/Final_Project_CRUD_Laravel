<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_pegawai', function (Blueprint $table) {
            $table->id();
            $table->text('Nama');
            $table->text('Pendidikan');
            $table->text('NamaInstansi');
            $table->text('Jurusan');
            $table->Integer('IPK');
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
        Schema::dropIfExists('pendidikan_pegawai');
    }
}
