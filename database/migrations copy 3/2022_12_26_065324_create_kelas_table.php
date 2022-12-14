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
            $table->increments('id');
            $table->string('nama_kelas');
            $table->enum('ket_kelas', ['10', '11', '12']);
            $table->unsignedInteger('kurikulum_id')->index('kurikulum_id');
            $table->unsignedInteger('jurusan_id')->index('jurusan_id');
            $table->softDeletes();
            $table->timestamps();

            $table->index(['kurikulum_id', 'jurusan_id'], 'kurikulum_id_2');
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
