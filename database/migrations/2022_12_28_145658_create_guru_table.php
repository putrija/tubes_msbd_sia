<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('id_card_guru', 10)->unique('id_card_guru');
            $table->string('nama_guru');
            $table->string('kode_guru', 5)->unique('kode_guru');
            $table->string('nip', 30)->nullable();
            $table->char('nuptk', 16)->nullable();
            $table->unsignedInteger('status_kepegawaian_id')->nullable()->index('status_kepegawaian_id');
            $table->unsignedInteger('jenis_ptk_id')->nullable()->index('jenis_ptk_id');
            $table->unsignedInteger('tugas_tambahan_id')->nullable()->index('tugas_tambahan_id');
            $table->enum('jk', ['L', 'P']);
            $table->string('email')->nullable();
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Buddha', 'Hindu', 'Konghucu', 'Aliran Kepercayaan']);
            $table->string('telp', 15)->nullable();
            $table->string('hp', 15)->nullable();
            $table->string('tmp_lahir', 50);
            $table->date('tgl_lahir');
            $table->char('nik', 16)->nullable();
            $table->string('no_kk', 30)->nullable();
            $table->string('alamat');
            $table->char('rt', 3)->nullable();
            $table->char('rw', 3)->nullable();
            $table->string('nama_dusun')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->char('kode_pos', 5)->nullable();
            $table->string('foto')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['kode_guru'], 'kode_guru_2');
        });

        // trigger update
        DB::unprepared('CREATE TRIGGER `update_log_guru` AFTER UPDATE ON `guru`
        FOR EACH ROW BEGIN
       
                INSERT INTO `log_guru` (`nama_guru_old`,`nama_guru_new`, `tmp_lahir_old`, `tmp_lahir_new`,`hp_old`, `hp_new`, `telp_old`, 
       `telp_new`, `jk_old`, `jk_new`,`tgl_lahir_old`,`tgl_lahir_new`,`status`)
           VALUES ( OLD.nama_guru,NEW.nama_guru, OLD.tmp_lahir, NEW.tmp_lahir, OLD.hp, 
       NEW.hp, OLD.telp, NEW.telp, OLD.jk, NEW.jk,  OLD.tgl_lahir, NEW.tgl_lahir, "Update");
             END');

        // trigger insert
        // DB::unprepared('CREATE TRIGGER `insert_log_guru` AFTER INSERT ON `guru`
        // FOR EACH ROW BEGIN

        //     INSERT INTO `log_guru` (`nama_guru_old`,`nama_guru_new`, `tmp_lahir_old`, `tmp_lahir_new`,`hp_old`, `hp_new`, `telp_old`, 
        // `telp_new`, `jk_old`, `jk_new`,`tgl_lahir_old`,`tgl_lahir_new`)
	    //     VALUES ( NEW.nama_guru, NEW.tmp_lahir,
        // NEW.hp, NEW.telp, NEW.jk, NEW.tgl_lahir, "Insert");
        //     END');

        // trigger banned edit file guru
        // DB::unprepared('CREATE TRIGGER `banned_edit_fileguru` BEFORE UPDATE ON `guru`
        // FOR EACH ROW BEGIN

        //     IF NEW.id <> OLD.id || NEW.id_card_guru <> OLD.id_card_guru || NEW.nip <> OLD.nip || NEW.kode_guru <> OLD.kode_guru THEN 
        // SIGNAL SQLSTATE "45000" SET MESSAGE_TEXT = "Field ini tidak dapat diubah!"; 
        // END IF
        // ');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru');

        DB::unprepared('DROP TRIGGER "update_log_guru"');
        DB::unprepared('DROP TRIGGER "insert_log_guru"');
    }
};
