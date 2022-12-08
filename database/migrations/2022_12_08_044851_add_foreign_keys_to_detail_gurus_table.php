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
        Schema::table('detail_gurus', function (Blueprint $table) {
            $table->foreign(['id_guru'], 'detail_gurus_ibfk_1')->references(['id'])->on('guru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_gurus', function (Blueprint $table) {
            $table->dropForeign('detail_gurus_ibfk_1');
        });
    }
};
