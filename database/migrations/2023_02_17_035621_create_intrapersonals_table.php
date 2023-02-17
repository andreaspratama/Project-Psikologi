<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntrapersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intrapersonals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('anak_saya_mengetahui_kelebihan_dan_kelemahannya');
            $table->string('anak_saya_memiliki_pendirian_kuat');
            $table->string('anak_saya_bisa_menerima_dirinya');
            $table->string('anak_saya_memahami_perasaannya');
            $table->string('anak_saya_suka_mengungkapkan_perasaan');
            $table->string('anak_saya_menyadari_kesalahan');
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
        Schema::dropIfExists('intrapersonals');
    }
}
