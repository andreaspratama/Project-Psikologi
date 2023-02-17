<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisualspasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visualspas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('anak_saya_sering_berimajinasi_atau_berkhayal');
            $table->string('anak_saya_hafal_jalan_yang_dilaluinya');
            $table->string('anak_saya_mengingat_dengan_menggambar_di_kertas');
            $table->string('anak_saya_lebih_suka_melihat_gambar_daripada_membaca');
            $table->string('anak_saya_suka_mengatur_letak_barang');
            $table->string('anak_saya_suka_melihat_foto_dan_memotret');
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
        Schema::dropIfExists('visualspas');
    }
}
