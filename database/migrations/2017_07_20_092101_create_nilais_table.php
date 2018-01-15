<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_guru')->unsigned();
            $table->foreign('id_guru')->references('id')->on('gurus')->onUpdate('cascade')->onDelete('cascade'); 
            $table->integer('id_siswa')->unsigned();
            $table->foreign('id_siswa')->references('id')->on('siswas')->onUpdate('cascade')->onDelete('cascade'); 
            $table->integer('id_pelajaran')->unsigned();
            $table->foreign('id_pelajaran')->references('id')->on('mapels')->onUpdate('cascade')->onDelete('cascade'); 
            $table->integer('id_jurusan')->unsigned();
            $table->foreign('id_jurusan')->references('id')->on('jurusans')->onUpdate('cascade')->onDelete('cascade'); 
            $table->integer('id_kelas')->unsigned();
            $table->foreign('id_kelas')->references('id')->on('kelas')->onUpdate('cascade')->onDelete('cascade'); 
            $table->string('nilai');
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
        Schema::dropIfExists('nilais');
    }
}
