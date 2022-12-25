<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id_kelas');
            $table->string('nama_kelas');
            $table->unsignedInteger('ket_kelas');
            $table->unsignedInteger('kurikulum_id')->index('kurikulum_id');
            $table->unsignedInteger('jurusan_id')->index('jurusan_id');

            $table->index(['kurikulum_id', 'jurusan_id'], 'kurikulum_id_2');
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
        Schema::dropIfExists('kelas');
    }
};
