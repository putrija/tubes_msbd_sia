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
            $table->string('nama_kelas', 50);
            $table->unsignedInteger('paket_id');
            $table->unsignedInteger('guru_id')->index('guru_id');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['paket_id', 'guru_id'], 'paket_id');
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
