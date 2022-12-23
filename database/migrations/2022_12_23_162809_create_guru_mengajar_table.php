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
            $table->increments('id_guru_mengajar');
            $table->unsignedInteger('guru_id')->index('guru_id');
            $table->unsignedInteger('mapel_id')->index('mapel_id');
            $table->unsignedInteger('kelas_id')->index('kelas_id');
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
        Schema::dropIfExists('guru_mengajar');
    }
};
