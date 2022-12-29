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
        Schema::create('guru_mengajar', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('guru_id');
            $table->unsignedInteger('mapel_id')->index('mapel_id');
            // $table->unsignedInteger('kelas_id')->index('kelas_id');
            $table->unsignedInteger('tahun_ajaran_id')->index('tahun_ajaran_id');
            $table->timestamps();

            $table->index(['guru_id', 'mapel_id'], 'guru_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru_mengajar');
    }
};
