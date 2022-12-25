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
        Schema::create('articles', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_articles', true);
            $table->string('nama_penulis');
            $table->string('judul');
            $table->text('excerpt');
            $table->text('isi');
            $table->date('published_at');
            $table->enum('Status', ['Published', 'Not Published']);
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
        Schema::dropIfExists('articles');
    }
};
