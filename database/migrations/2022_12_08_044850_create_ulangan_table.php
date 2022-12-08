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
        Schema::create('ulangan', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('siswa_id');
            $table->unsignedInteger('kelas_id');
            $table->unsignedInteger('guru_id');
            $table->unsignedInteger('mapel_id');
            $table->string('ulha_1', 5)->nullable();
            $table->string('ulha_2', 5)->nullable();
            $table->string('uts', 5)->nullable();
            $table->string('ulha_3', 5)->nullable();
            $table->string('uas', 5)->nullable();
            $table->timestamps();

            $table->index(['siswa_id', 'kelas_id', 'guru_id', 'mapel_id'], 'siswa_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ulangan');
    }
};
