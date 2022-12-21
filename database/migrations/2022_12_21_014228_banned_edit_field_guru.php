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

        DB::unprepared("CREATE TRIGGER `banned_edit_fileguru` BEFORE UPDATE ON `guru` 
        FOR EACH ROW 
        IF NEW.id <> OLD.id || NEW.id_card <> OLD.id_card || NEW.nip <> OLD.nip THEN 
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT ='Field ini tidak dapat diubah!'; 
        END IF");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
