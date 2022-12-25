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
        Schema::table('guru', function (Blueprint $table) {
            $table->foreign(['jenis_ptk_id'], 'guru_ibfk_1')->references(['id_jenis_ptk'])->on('jenis_ptk');
            $table->foreign(['status_kepegawaian_id'], 'guru_ibfk_3')->references(['id_status_kepegawaian'])->on('status_kepegawaian_guru');
            $table->foreign(['tugas_tambahan_id'], 'guru_ibfk_2')->references(['id_tugas_tambahan'])->on('tugas_tambahan_guru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guru', function (Blueprint $table) {
            $table->dropForeign('guru_ibfk_1');
            $table->dropForeign('guru_ibfk_3');
            $table->dropForeign('guru_ibfk_2');
        });
    }
};
