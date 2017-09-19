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
            $table->integer('id_siswa')->unsigned();
            $table->integer('id_pelajaran')->unsigned();
            $table->integer('id_jurusan')->unsigned();
            $table->integer('id_kelas')->unsigned();
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
