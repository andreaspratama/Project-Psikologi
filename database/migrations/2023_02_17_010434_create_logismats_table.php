<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogismatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logismats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('anak_saya_suka_pelajaran_berhitung');
            $table->string('anak_saya_suka_permainan_logika');
            $table->string('anak_saya_suka_soal_hitungan');
            $table->string('anak_saya_suka_mengurutkan_ukuran_jarak');
            $table->string('anak_saya_senang_mencari_tahu_cara_kerja_benda');
            $table->string('anak_saya_senang_mencari_tahu_fungsi_benda');
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
        Schema::dropIfExists('logismats');
    }
}
