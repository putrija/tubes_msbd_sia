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
        Schema::create('view_rapor', function (Blueprint $table) {
            $table->comment('');
            $table->string('nama')->nullable();
            $table->string('mapel')->nullable();
            $table->char('semester', 2)->nullable();
            $table->string('wali_kelas')->nullable();
            $table->unsignedInteger('nilai_pengetahuan')->nullable();
            $table->char('predikat_pengetahuan', 2)->nullable();
            $table->unsignedInteger('nilai_keterampilan')->nullable();
            $table->char('Predikat_Keterampilan', 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_rapor');
    }
};
