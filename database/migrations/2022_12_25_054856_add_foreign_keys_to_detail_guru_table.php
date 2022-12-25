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
        Schema::table('detail_guru', function (Blueprint $table) {
            $table->foreign(['guru_id'], 'detail_guru_ibfk_1')->references(['id_guru'])->on('guru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_guru', function (Blueprint $table) {
            $table->dropForeign('detail_guru_ibfk_1');
        });
    }
};
