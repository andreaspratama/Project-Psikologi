<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaturalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naturals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('anak_saya_sangat_memperhatikan_lingkungan');
            $table->string('anak_saya_senang_berwisata_ke_alam_terbuka');
            $table->string('anak_saya_suka_memelihara_hewan');
            $table->string('anak_saya_suka_merawat_tanaman');
            $table->string('anak_saya_suka_mengamati_dan_merawat_makhluk_hidup');
            $table->string('anak_saya_banyak_pengetahuan_tentang_makhluk_hidup');
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
        Schema::dropIfExists('naturals');
    }
}
