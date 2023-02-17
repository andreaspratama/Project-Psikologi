<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerballinguistiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verballinguistiks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('Anak_saya_suka_bercerita');
            $table->string('Anak_saya_mudah_mengingat_kata');
            $table->string('Anak_saya_suka_permainan_kata');
            $table->string('Anak_saya_cepat_menemukan_kesalahan_kata');
            $table->string('Anak_saya_mampu_mengungkapkan_ide');
            $table->string('Anak_saya_suka_membaca');
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
        Schema::dropIfExists('verballinguistiks');
    }
}
