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
        Schema::create('sikap', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->unsignedInteger('siswa_id');
            $table->unsignedInteger('kelas_id');
            $table->unsignedInteger('guru_id');
            $table->unsignedInteger('mapel_id');
            $table->string('sikap_1', 5)->nullable();
            $table->string('sikap_2', 5)->nullable();
            $table->string('sikap_3', 5)->nullable();
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
        Schema::dropIfExists('sikap');
    }
};
