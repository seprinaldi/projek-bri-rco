<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kelas');
            $table->foreignId('id_materi');
            $table->foreignId('id_asisten');
            $table->string('teaching_role');
            $table->date('date');
            $table->time('mulai');
            $table->time('berakhir')->nullable();
            $table->string('durasi')->nullable();
            $table->foreignId('id_code');
            $table->timestamps();
            
            $table->id();
            $table->bigInteger('id_kelas')->unsigned();
            $table->bigInteger('id_materi')->unsigned();
            $table->bigInteger('id_asisten')->unsigned();
            $table->string('teaching_role');
            $table->date('date');
            $table->time('mulai');
            $table->time('berakhir')->nullable();
            $table->string('durasi')->nullable();
            $table->bigInteger('id_code')->unsigned();          
            $table->foreign('id_code')->references('id')->on('code');
            $table->foreign('id_asisten')->references('id')->on('users');
            $table->foreign('id_materi')->references('id')->on('materi');
            $table->foreign('id_kelas')->references('id')->on('kelas');
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
        Schema::dropIfExists('absensi');
    }
}
