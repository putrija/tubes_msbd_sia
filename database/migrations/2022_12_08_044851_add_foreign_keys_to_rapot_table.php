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
        Schema::table('rapot', function (Blueprint $table) {
            $table->foreign(['siswa_id'], 'rapot_ibfk_1')->references(['id'])->on('siswa');
            $table->foreign(['guru_id'], 'rapot_ibfk_3')->references(['id'])->on('guru');
            $table->foreign(['kelas_id'], 'rapot_ibfk_2')->references(['id'])->on('kelas');
            $table->foreign(['mapel_id'], 'rapot_ibfk_4')->references(['id'])->on('mapel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rapot', function (Blueprint $table) {
            $table->dropForeign('rapot_ibfk_1');
            $table->dropForeign('rapot_ibfk_3');
            $table->dropForeign('rapot_ibfk_2');
            $table->dropForeign('rapot_ibfk_4');
        });
    }
};
