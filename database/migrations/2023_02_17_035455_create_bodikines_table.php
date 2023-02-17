<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodikinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodikines', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('anak_saya_ingin_menyentuh_benda_yang_dilihat');
            $table->string('anak_saya_suka_senam_atau_menari');
            $table->string('anak_saya_tidak_betah_duduk_lama');
            $table->string('anak_saya_berbicara_dengan_gerakan_tubuh');
            $table->string('anak_saya_suka_ketrampilan_praktis');
            $table->string('anak_saya_mudah_menirukan_gerakan');
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
        Schema::dropIfExists('bodikines');
    }
}
