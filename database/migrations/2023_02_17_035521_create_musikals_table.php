<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusikalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musikals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('anak_saya_senang_mendengarkan_musik_dan_radio');
            $table->string('anak_saya_melakukan_kegiatan_sambil_bersenandung');
            $table->string('anak_saya_bisa_memainkan_musik');
            $table->string('anak_saya_cepet_menguasai_lagu_atau_alat_musik');
            $table->string('anak_saya_suaranya_merdu');
            $table->string('anak_saya_sangat_tertarik_pada_musik_dan_lagu');
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
        Schema::dropIfExists('musikals');
    }
}
