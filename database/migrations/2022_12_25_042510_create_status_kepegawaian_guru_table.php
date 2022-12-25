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
        Schema::create('status_kepegawaian_guru', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id_status_kepegawaian');
            $table->string('ket_status_kepeg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_kepegawaian_guru');
    }
};
