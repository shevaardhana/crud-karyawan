<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('mulai_kerja');
            $table->string('posisi');
            $table->string('nama');
            $table->string('nama_bank');
            $table->string('no_rekening');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->longText('alamat_tinggal');
            $table->string('no_ktp');
            $table->string('no_hp');
            $table->string('nama_emergency_call');
            $table->string('emergency_call');
            $table->string('status');
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
        Schema::dropIfExists('karyawan');
    }
}
