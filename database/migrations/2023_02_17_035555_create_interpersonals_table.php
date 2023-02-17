<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterpersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interpersonals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('anak_saya_senang_bergaul');
            $table->string('anak_saya_senang_berada_dalam_kelompok');
            $table->string('anak_saya_bisa_memahami_perasaan_orang_lain');
            $table->string('anak_saya_cepat_akrab');
            $table->string('anak_saya_punya_banyak_sahabat');
            $table->string('anak_saya_ramah_dan_menyenangkan');
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
        Schema::dropIfExists('interpersonals');
    }
}
