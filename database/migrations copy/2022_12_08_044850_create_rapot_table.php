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
        Schema::create('rapot', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('siswa_id');
            $table->unsignedInteger('kelas_id')->index('kelas_id');
            $table->unsignedInteger('guru_id')->index('guru_id');
            $table->unsignedInteger('mapel_id')->index('mapel_id');
            $table->string('p_nilai', 5);
            $table->string('p_predikat', 5);
            $table->text('p_deskripsi');
            $table->string('k_nilai', 5)->nullable();
            $table->string('k_predikat', 5)->nullable();
            $table->text('k_deskripsi')->nullable();
            $table->timestamps();

            $table->index(['siswa_id', 'kelas_id', 'guru_id', 'mapel_id'], 'siswa_id');
            $table->index(['siswa_id', 'kelas_id', 'guru_id', 'mapel_id'], 'siswa_id_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapot');
    }
};
