<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis');
            $table->string('foto');
            $table->string('nama_siswa');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->integer('id_kelas')->unsigned();
            $table->integer('jurusan_id')->unsigned();
            $table->text('alamat');
            $table->string('no_telepon');
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
        Schema::dropIfExists('siswas');
    }
}
