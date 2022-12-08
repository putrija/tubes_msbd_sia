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
        Schema::create('log_gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guru_old', 50)->nullable();
            $table->string('nama_guru_new', 50)->nullable();
            $table->string('tmp_lahir_old', 50)->nullable();
            $table->string('tmp_lahir_new', 50)->nullable();
            $table->string('hp_old', 15)->nullable();
            $table->string('hp_new', 15)->nullable();
            $table->enum('jk_old', ['L', 'P'])->nullable();
            $table->enum('jk_new', ['L', 'P'])->nullable();
            $table->date('tgl_lahir_old')->nullable();
            $table->date('tgl_lahir_new')->nullable();
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
        Schema::dropIfExists('log_gurus');
    }
};
