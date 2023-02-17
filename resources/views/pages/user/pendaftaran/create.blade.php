<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <form action="{{route('penduser.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="namaAnak">Nama Anak</label>
              <input type="text" class="form-control" id="namaAnak" name="namaAnak">
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="text" class="form-control" id="umur" name="umur">
            </div>
            <div class="form-group">
                <label for="namaOrtu">Nama Ortu</label>
                <input type="text" class="form-control" id="namaOrtu" name="namaOrtu">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
              </div>
              <div class="form-group">
                <label for="nowa">No Wa</label>
                <input type="text" class="form-control" id="nowa" name="nowa">
              </div>
            
            {{-- Verbal / Linguistik --}}
            <p style="font-weight: bold">A. Anak saya : <span style="color:red">*</span></p>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suka bercerita</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="Anak_saya_suka_bercerita" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="customRadioInline1">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="Anak_saya_suka_bercerita" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="customRadioInline2">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline3" name="Anak_saya_suka_bercerita" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="customRadioInline3">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline4" name="Anak_saya_suka_bercerita" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="customRadioInline4">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline5" name="Anak_saya_suka_bercerita" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="customRadioInline5">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline6" name="Anak_saya_suka_bercerita" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="customRadioInline6">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya mudah mengingat kata</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal21" name="Anak_saya_mudah_mengingat_kata" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="verbal21">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal22" name="Anak_saya_mudah_mengingat_kata" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="verbal22">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal23" name="Anak_saya_mudah_mengingat_kata" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="verbal23">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal24" name="Anak_saya_mudah_mengingat_kata" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="verbal24">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal25" name="Anak_saya_mudah_mengingat_kata" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="verbal25">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal26" name="Anak_saya_mudah_mengingat_kata" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="verbal26">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suka permainan kata</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal31" name="Anak_saya_suka_permainan_kata" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="verbal31">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal32" name="Anak_saya_suka_permainan_kata" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="verbal32">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal33" name="Anak_saya_suka_permainan_kata" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="verbal33">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal34" name="Anak_saya_suka_permainan_kata" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="verbal34">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal35" name="Anak_saya_suka_permainan_kata" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="verbal35">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal36" name="Anak_saya_suka_permainan_kata" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="verbal36">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya cepat menemukan kesalahan kata</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal41" name="Anak_saya_cepat_menemukan_kesalahan_kata" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="verbal41">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal42" name="Anak_saya_cepat_menemukan_kesalahan_kata" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="verbal42">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal43" name="Anak_saya_cepat_menemukan_kesalahan_kata" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="verbal43">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal44" name="Anak_saya_cepat_menemukan_kesalahan_kata" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="verbal44">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal45" name="Anak_saya_cepat_menemukan_kesalahan_kata" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="verbal45">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal46" name="Anak_saya_cepat_menemukan_kesalahan_kata" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="verbal46">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya mampu mengungkapkan ide</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal51" name="Anak_saya_mampu_mengungkapkan_ide" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="verbal51">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal52" name="Anak_saya_mampu_mengungkapkan_ide" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="verbal52">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal53" name="Anak_saya_mampu_mengungkapkan_ide" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="verbal53">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal54" name="Anak_saya_mampu_mengungkapkan_ide" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="verbal54">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal55" name="Anak_saya_mampu_mengungkapkan_ide" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="verbal55">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal56" name="Anak_saya_mampu_mengungkapkan_ide" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="verbal56">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suka membaca</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal61" name="Anak_saya_suka_membaca" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="verbal61">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal62" name="Anak_saya_suka_membaca" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="verbal62">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal63" name="Anak_saya_suka_membaca" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="verbal63">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal64" name="Anak_saya_suka_membaca" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="verbal64">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal65" name="Anak_saya_suka_membaca" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="verbal65">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="verbal66" name="Anak_saya_suka_membaca" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="verbal66">6</label>
                      </div>
                </div>
            </div>

            {{-- Logis / Matematis --}}
            <p style="font-weight: bold">B. Anak saya : <span style="color:red">*</span></p>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suka pelajaran berhitung</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat1" name="anak_saya_suka_pelajaran_berhitung" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="logismat1">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat2" name="anak_saya_suka_pelajaran_berhitung" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="logismat2">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat3" name="anak_saya_suka_pelajaran_berhitung" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="logismat3">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat4" name="anak_saya_suka_pelajaran_berhitung" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="logismat4">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat5" name="anak_saya_suka_pelajaran_berhitung" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="logismat5">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat6" name="anak_saya_suka_pelajaran_berhitung" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="logismat6">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suka permainan logika (Catur, Monopoli)</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat21" name="anak_saya_suka_permainan_logika" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="logismat21">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat22" name="anak_saya_suka_permainan_logika" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="logismat22">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat23" name="anak_saya_suka_permainan_logika" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="logismat23">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat24" name="anak_saya_suka_permainan_logika" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="logismat24">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat25" name="anak_saya_suka_permainan_logika" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="logismat25">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat26" name="anak_saya_suka_permainan_logika" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="logismat26">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suka soal hitungan</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat31" name="anak_saya_suka_soal_hitungan" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="logismat31">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat32" name="anak_saya_suka_soal_hitungan" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="logismat32">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat33" name="anak_saya_suka_soal_hitungan" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="logismat33">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat34" name="anak_saya_suka_soal_hitungan" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="logismat34">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat35" name="anak_saya_suka_soal_hitungan" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="logismat35">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat36" name="anak_saya_suka_soal_hitungan" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="logismat36">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suka mengurutkan ukuran jarak, dll</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat41" name="anak_saya_suka_mengurutkan_ukuran_jarak" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="logismat41">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat42" name="anak_saya_suka_mengurutkan_ukuran_jarak" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="logismat42">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat43" name="anak_saya_suka_mengurutkan_ukuran_jarak" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="logismat43">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat44" name="anak_saya_suka_mengurutkan_ukuran_jarak" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="logismat44">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat45" name="anak_saya_suka_mengurutkan_ukuran_jarak" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="logismat45">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat46" name="anak_saya_suka_mengurutkan_ukuran_jarak" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="logismat46">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya senang mencari tahu cara kerja benda</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat51" name="anak_saya_suka_mengatur_letak_barang" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="logismat51">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat52" name="anak_saya_senang_mencari_tahu_cara_kerja_benda" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="logismat52">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat53" name="anak_saya_senang_mencari_tahu_cara_kerja_benda" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="logismat53">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat54" name="anak_saya_senang_mencari_tahu_cara_kerja_benda" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="logismat54">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat55" name="anak_saya_senang_mencari_tahu_cara_kerja_benda" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="logismat55">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat56" name="anak_saya_senang_mencari_tahu_cara_kerja_benda" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="logismat56">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya senang mencari tahu fungsi benda</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat61" name="anak_saya_suka_melihat_foto_dan_memotret" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="logismat61">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat62" name="anak_saya_senang_mencari_tahu_fungsi_benda" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="logismat62">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat63" name="anak_saya_senang_mencari_tahu_fungsi_benda" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="logismat63">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat64" name="anak_saya_senang_mencari_tahu_fungsi_benda" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="logismat64">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat65" name="anak_saya_senang_mencari_tahu_fungsi_benda" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="logismat65">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="logismat66" name="anak_saya_senang_mencari_tahu_fungsi_benda" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="logismat66">6</label>
                      </div>
                </div>
            </div>

            {{-- Visual / Spasial --}}
            <p style="font-weight: bold">C. Anak saya : <span style="color:red">*</span></p>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya sering berimajinasi atau berkhayal</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa1" name="anak_saya_sering_berimajinasi_atau_berkhayal" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="visualspa1">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa2" name="anak_saya_sering_berimajinasi_atau_berkhayal" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="visualspa2">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa3" name="anak_saya_sering_berimajinasi_atau_berkhayal" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="visualspa3">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa4" name="anak_saya_sering_berimajinasi_atau_berkhayal" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="visualspa4">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa5" name="anak_saya_sering_berimajinasi_atau_berkhayal" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="visualspa5">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa6" name="anak_saya_sering_berimajinasi_atau_berkhayal" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="visualspa6">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya hafal jalan yang dilaluinya</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa21" name="anak_saya_hafal_jalan_yang_dilaluinya" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="visualspa21">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa22" name="anak_saya_hafal_jalan_yang_dilaluinya" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="visualspa22">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa23" name="anak_saya_hafal_jalan_yang_dilaluinya" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="visualspa23">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa24" name="anak_saya_hafal_jalan_yang_dilaluinya" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="visualspa24">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa25" name="anak_saya_hafal_jalan_yang_dilaluinya" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="visualspa25">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa26" name="anak_saya_hafal_jalan_yang_dilaluinya" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="visualspa26">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya mengingat dengan menggambar di kertas</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa31" name="anak_saya_tidak_betah_duduk_lama" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="visualspa31">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa32" name="anak_saya_mengingat_dengan_menggambar_di_kertas" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="visualspa32">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa33" name="anak_saya_mengingat_dengan_menggambar_di_kertas" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="visualspa33">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa34" name="anak_saya_mengingat_dengan_menggambar_di_kertas" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="visualspa34">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa35" name="anak_saya_mengingat_dengan_menggambar_di_kertas" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="visualspa35">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa36" name="anak_saya_mengingat_dengan_menggambar_di_kertas" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="visualspa36">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya lebih suka melihat gambar daripada membaca</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa41" name="anak_saya_lebih_suka_melihat_gambar_daripada_membaca" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="visualspa41">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa42" name="anak_saya_lebih_suka_melihat_gambar_daripada_membaca" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="visualspa42">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa43" name="anak_saya_lebih_suka_melihat_gambar_daripada_membaca" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="visualspa43">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa44" name="anak_saya_lebih_suka_melihat_gambar_daripada_membaca" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="visualspa44">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa45" name="anak_saya_lebih_suka_melihat_gambar_daripada_membaca" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="visualspa45">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa46" name="anak_saya_lebih_suka_melihat_gambar_daripada_membaca" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="visualspa46">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suka mengatur letak barang</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa51" name="anak_saya_suka_mengatur_letak_barang" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="visualspa51">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa52" name="anak_saya_suka_mengatur_letak_barang" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="visualspa52">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa53" name="anak_saya_suka_mengatur_letak_barang" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="visualspa53">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa54" name="anak_saya_suka_mengatur_letak_barang" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="visualspa54">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa55" name="anak_saya_suka_mengatur_letak_barang" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="visualspa55">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa56" name="anak_saya_suka_mengatur_letak_barang" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="visualspa56">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suka melihat foto dan memotret</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa61" name="anak_saya_suka_melihat_foto_dan_memotret" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="visualspa61">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa62" name="anak_saya_suka_melihat_foto_dan_memotret" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="visualspa62">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa63" name="anak_saya_suka_melihat_foto_dan_memotret" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="visualspa63">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa64" name="anak_saya_suka_melihat_foto_dan_memotret" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="visualspa64">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa65" name="anak_saya_suka_melihat_foto_dan_memotret" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="visualspa65">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="visualspa66" name="anak_saya_suka_melihat_foto_dan_memotret" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="visualspa66">6</label>
                      </div>
                </div>
            </div>

            {{-- Body Kinestetik --}}
            <p style="font-weight: bold">D. Anak saya : <span style="color:red">*</span></p>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya ingin menyentuh benda yang dilihat</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine1" name="anak_saya_ingin_menyentuh_benda_yang_dilihat" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="bodikine1">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine2" name="anak_saya_ingin_menyentuh_benda_yang_dilihat" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="bodikine2">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine3" name="anak_saya_ingin_menyentuh_benda_yang_dilihat" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="bodikine3">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine4" name="anak_saya_ingin_menyentuh_benda_yang_dilihat" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="bodikine4">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine5" name="anak_saya_ingin_menyentuh_benda_yang_dilihat" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="bodikine5">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine6" name="anak_saya_ingin_menyentuh_benda_yang_dilihat" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="bodikine6">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suka senam atau menari</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine21" name="anak_saya_suka_senam_atau_menari" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="bodikine21">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine22" name="anak_saya_suka_senam_atau_menari" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="bodikine22">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine23" name="anak_saya_suka_senam_atau_menari" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="bodikine23">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine24" name="anak_saya_suka_senam_atau_menari" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="bodikine24">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine25" name="anak_saya_suka_senam_atau_menari" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="bodikine25">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine26" name="anak_saya_suka_senam_atau_menari" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="bodikine26">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya tidak betah duduk lama</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine31" name="anak_saya_tidak_betah_duduk_lama" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="bodikine31">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine32" name="anak_saya_tidak_betah_duduk_lama" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="bodikine32">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine33" name="anak_saya_tidak_betah_duduk_lama" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="bodikine33">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine34" name="anak_saya_tidak_betah_duduk_lama" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="bodikine34">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine35" name="anak_saya_tidak_betah_duduk_lama" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="bodikine35">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine36" name="anak_saya_tidak_betah_duduk_lama" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="bodikine36">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya berbicara dengan gerakan tubuh</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine41" name="anak_saya_berbicara_dengan_gerakan_tubuh" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="bodikine41">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine42" name="anak_saya_berbicara_dengan_gerakan_tubuh" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="bodikine42">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine43" name="anak_saya_berbicara_dengan_gerakan_tubuh" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="bodikine43">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine44" name="anak_saya_berbicara_dengan_gerakan_tubuh" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="bodikine44">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine45" name="anak_saya_berbicara_dengan_gerakan_tubuh" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="bodikine45">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine46" name="anak_saya_berbicara_dengan_gerakan_tubuh" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="bodikine46">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suka ketrampilan praktis (menjahit, mengotak atik, dll)</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine51" name="anak_saya_suka_ketrampilan_praktis" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="bodikine51">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine52" name="anak_saya_suka_ketrampilan_praktis" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="bodikine52">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine53" name="anak_saya_suka_ketrampilan_praktis" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="bodikine53">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine54" name="anak_saya_suka_ketrampilan_praktis" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="bodikine54">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine55" name="anak_saya_suka_ketrampilan_praktis" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="bodikine55">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine56" name="anak_saya_suka_ketrampilan_praktis" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="bodikine56">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya mudah menirukan gerakan</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine61" name="anak_saya_mudah_menirukan_gerakan" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="bodikine61">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine62" name="anak_saya_mudah_menirukan_gerakan" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="bodikine62">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine63" name="anak_saya_mudah_menirukan_gerakan" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="bodikine63">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine64" name="anak_saya_mudah_menirukan_gerakan" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="bodikine64">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine65" name="anak_saya_mudah_menirukan_gerakan" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="bodikine65">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="bodikine66" name="anak_saya_mudah_menirukan_gerakan" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="bodikine66">6</label>
                      </div>
                </div>
            </div>

            {{-- Musikal --}}
            <p style="font-weight: bold">E. Anak saya : <span style="color:red">*</span></p>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya senang mendengarkan musik dan radio</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal1" name="anak_saya_senang_mendengarkan_musik_dan_radio" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="musikal1">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal2" name="anak_saya_senang_mendengarkan_musik_dan_radio" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="musikal2">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal3" name="anak_saya_senang_mendengarkan_musik_dan_radio" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="musikal3">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal4" name="anak_saya_senang_mendengarkan_musik_dan_radio" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="musikal4">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal5" name="anak_saya_senang_mendengarkan_musik_dan_radio" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="musikal5">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal6" name="anak_saya_senang_mendengarkan_musik_dan_radio" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="musikal6">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya melakukan kegiatan sambil bersenandung</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal21" name="anak_saya_melakukan_kegiatan_sambil_bersenandung" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="musikal21">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal22" name="anak_saya_melakukan_kegiatan_sambil_bersenandung" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="musikal22">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal23" name="anak_saya_melakukan_kegiatan_sambil_bersenandung" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="musikal23">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal24" name="anak_saya_melakukan_kegiatan_sambil_bersenandung" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="musikal24">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal25" name="anak_saya_melakukan_kegiatan_sambil_bersenandung" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="musikal25">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal26" name="anak_saya_melakukan_kegiatan_sambil_bersenandung" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="musikal26">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya bisa memainkan musik</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal31" name="anak_saya_bisa_memainkan_musik" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="musikal31">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal32" name="anak_saya_bisa_memainkan_musik" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="musikal32">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal33" name="anak_saya_bisa_memainkan_musik" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="musikal33">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal34" name="anak_saya_bisa_memainkan_musik" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="musikal34">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal35" name="anak_saya_bisa_memainkan_musik" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="musikal35">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal36" name="anak_saya_bisa_memainkan_musik" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="musikal36">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya cepet menguasai lagu atau alat musik</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal41" name="anak_saya_cepet_menguasai_lagu_atau_alat_musik" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="musikal41">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal42" name="anak_saya_cepet_menguasai_lagu_atau_alat_musik" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="musikal42">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal43" name="anak_saya_cepet_menguasai_lagu_atau_alat_musik" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="musikal43">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal44" name="anak_saya_cepet_menguasai_lagu_atau_alat_musik" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="musikal44">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal45" name="anak_saya_cepet_menguasai_lagu_atau_alat_musik" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="musikal45">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal46" name="anak_saya_cepet_menguasai_lagu_atau_alat_musik" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="musikal46">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suaranya merdu</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal51" name="anak_saya_suaranya_merdu" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="musikal51">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal52" name="anak_saya_suaranya_merdu" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="musikal52">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal53" name="anak_saya_suaranya_merdu" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="musikal53">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal54" name="anak_saya_suaranya_merdu" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="musikal54">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal55" name="anak_saya_suaranya_merdu" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="musikal55">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal56" name="anak_saya_suaranya_merdu" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="musikal56">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya sangat tertarik pada musik dan lagu</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal61" name="anak_saya_sangat_tertarik_pada_musik_dan_lagu" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="musikal61">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal62" name="anak_saya_sangat_tertarik_pada_musik_dan_lagu" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="musikal62">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal63" name="anak_saya_sangat_tertarik_pada_musik_dan_lagu" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="musikal63">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal64" name="anak_saya_sangat_tertarik_pada_musik_dan_lagu" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="musikal64">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal65" name="anak_saya_sangat_tertarik_pada_musik_dan_lagu" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="musikal65">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="musikal66" name="anak_saya_sangat_tertarik_pada_musik_dan_lagu" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="musikal66">6</label>
                      </div>
                </div>
            </div>

            {{-- Interpersonal --}}
            <p style="font-weight: bold">F. Anak saya : <span style="color:red">*</span></p>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya senang bergaul</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal1" name="anak_saya_senang_bergaul" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="interpersonal1">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal2" name="anak_saya_senang_bergaul" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="interpersonal2">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal3" name="anak_saya_senang_bergaul" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="interpersonal3">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal4" name="anak_saya_senang_bergaul" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="interpersonal4">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal5" name="anak_saya_senang_bergaul" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="interpersonal5">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal6" name="anak_saya_senang_bergaul" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="interpersonal6">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya senang berada dalam kelompok</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal21" name="anak_saya_senang_berada_dalam_kelompok" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="interpersonal21">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal22" name="anak_saya_senang_berada_dalam_kelompok" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="interpersonal22">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal23" name="anak_saya_senang_berada_dalam_kelompok" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="interpersonal23">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal24" name="anak_saya_senang_berada_dalam_kelompok" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="interpersonal24">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal25" name="anak_saya_senang_berada_dalam_kelompok" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="interpersonal25">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal26" name="anak_saya_senang_berada_dalam_kelompok" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="interpersonal26">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya bisa memahami perasaan orang lain</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal31" name="anak_saya_bisa_memahami_perasaan_orang_lain" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="interpersonal31">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal32" name="anak_saya_bisa_memahami_perasaan_orang_lain" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="interpersonal32">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal33" name="anak_saya_bisa_memahami_perasaan_orang_lain" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="interpersonal33">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal34" name="anak_saya_bisa_memahami_perasaan_orang_lain" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="interpersonal34">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal35" name="anak_saya_bisa_memahami_perasaan_orang_lain" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="interpersonal35">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal36" name="anak_saya_bisa_memahami_perasaan_orang_lain" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="interpersonal36">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya cepat akrab</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal41" name="anak_saya_cepat_akrab" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="interpersonal41">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal42" name="anak_saya_cepat_akrab" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="interpersonal42">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal43" name="anak_saya_cepat_akrab" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="interpersonal43">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal44" name="anak_saya_cepat_akrab" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="interpersonal44">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal45" name="anak_saya_cepat_akrab" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="interpersonal45">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal46" name="anak_saya_cepat_akrab" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="interpersonal46">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya punya banyak sahabat</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal51" name="anak_saya_punya_banyak_sahabat" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="interpersonal51">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal52" name="anak_saya_punya_banyak_sahabat" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="interpersonal52">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal53" name="anak_saya_punya_banyak_sahabat" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="interpersonal53">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal54" name="anak_saya_punya_banyak_sahabat" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="interpersonal54">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal55" name="anak_saya_punya_banyak_sahabat" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="interpersonal55">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal56" name="anak_saya_punya_banyak_sahabat" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="interpersonal56">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya ramah dan menyenangkan</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal61" name="anak_saya_ramah_dan_menyenangkan" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="interpersonal61">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal62" name="anak_saya_ramah_dan_menyenangkan" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="interpersonal62">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal63" name="anak_saya_ramah_dan_menyenangkan" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="interpersonal63">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal64" name="anak_saya_ramah_dan_menyenangkan" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="interpersonal64">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal65" name="anak_saya_ramah_dan_menyenangkan" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="interpersonal65">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="interpersonal66" name="anak_saya_ramah_dan_menyenangkan" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="interpersonal66">6</label>
                      </div>
                </div>
            </div>

            {{-- Intrapersonal --}}
            <p style="font-weight: bold">G. Anak saya : <span style="color:red">*</span></p>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya mengetahui kelebihan dan kelemahannya</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal1" name="anak_saya_mengetahui_kelebihan_dan_kelemahannya" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="intrapersonal1">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal2" name="anak_saya_mengetahui_kelebihan_dan_kelemahannya" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="intrapersonal2">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal3" name="anak_saya_mengetahui_kelebihan_dan_kelemahannya" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="intrapersonal3">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal4" name="anak_saya_mengetahui_kelebihan_dan_kelemahannya" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="intrapersonal4">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal5" name="anak_saya_mengetahui_kelebihan_dan_kelemahannya" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="intrapersonal5">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal6" name="anak_saya_mengetahui_kelebihan_dan_kelemahannya" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="intrapersonal6">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya memiliki pendirian kuat</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal21" name="anak_saya_memiliki_pendirian_kuat" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="intrapersonal21">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal22" name="anak_saya_memiliki_pendirian_kuat" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="intrapersonal22">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal23" name="anak_saya_memiliki_pendirian_kuat" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="intrapersonal23">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal24" name="anak_saya_memiliki_pendirian_kuat" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="intrapersonal24">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal25" name="anak_saya_memiliki_pendirian_kuat" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="intrapersonal25">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal26" name="anak_saya_memiliki_pendirian_kuat" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="intrapersonal26">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya bisa menerima dirinya</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal31" name="anak_saya_bisa_menerima_dirinya" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="intrapersonal31">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal32" name="anak_saya_bisa_menerima_dirinya" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="intrapersonal32">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal33" name="anak_saya_bisa_menerima_dirinya" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="intrapersonal33">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal34" name="anak_saya_bisa_menerima_dirinya" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="intrapersonal34">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal35" name="anak_saya_bisa_menerima_dirinya" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="intrapersonal35">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal36" name="anak_saya_bisa_menerima_dirinya" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="intrapersonal36">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya memahami perasaannya</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal41" name="anak_saya_memahami_perasaannya" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="intrapersonal41">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal42" name="anak_saya_memahami_perasaannya" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="intrapersonal42">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal43" name="anak_saya_memahami_perasaannya" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="intrapersonal43">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal44" name="anak_saya_memahami_perasaannya" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="intrapersonal44">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal45" name="anak_saya_memahami_perasaannya" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="intrapersonal45">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal46" name="anak_saya_memahami_perasaannya" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="intrapersonal46">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suka mengungkapkan perasaan</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal51" name="anak_saya_suka_mengungkapkan_perasaan" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="intrapersonal51">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal52" name="anak_saya_suka_mengungkapkan_perasaan" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="intrapersonal52">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal53" name="anak_saya_suka_mengungkapkan_perasaan" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="intrapersonal53">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal54" name="anak_saya_suka_mengungkapkan_perasaan" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="intrapersonal54">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal55" name="anak_saya_suka_mengungkapkan_perasaan" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="intrapersonal55">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal56" name="anak_saya_suka_mengungkapkan_perasaan" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="intrapersonal56">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya menyadari kesalahan</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal61" name="anak_saya_menyadari_kesalahan" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="intrapersonal61">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal62" name="anak_saya_menyadari_kesalahan" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="intrapersonal62">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal63" name="anak_saya_menyadari_kesalahan" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="intrapersonal63">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal64" name="anak_saya_menyadari_kesalahan" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="intrapersonal64">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal65" name="anak_saya_menyadari_kesalahan" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="intrapersonal65">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal66" name="anak_saya_menyadari_kesalahan" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="intrapersonal66">6</label>
                      </div>
                </div>
            </div>

            {{-- Intrapersonal --}}
            <p style="font-weight: bold">G. Anak saya : <span style="color:red">*</span></p>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya mengetahui kelebihan dan kelemahannya</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal1" name="anak_saya_mengetahui_kelebihan_dan_kelemahannya" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="intrapersonal1">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal2" name="anak_saya_mengetahui_kelebihan_dan_kelemahannya" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="intrapersonal2">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal3" name="anak_saya_mengetahui_kelebihan_dan_kelemahannya" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="intrapersonal3">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal4" name="anak_saya_mengetahui_kelebihan_dan_kelemahannya" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="intrapersonal4">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal5" name="anak_saya_mengetahui_kelebihan_dan_kelemahannya" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="intrapersonal5">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal6" name="anak_saya_mengetahui_kelebihan_dan_kelemahannya" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="intrapersonal6">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya memiliki pendirian kuat</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal21" name="anak_saya_memiliki_pendirian_kuat" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="intrapersonal21">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal22" name="anak_saya_memiliki_pendirian_kuat" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="intrapersonal22">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal23" name="anak_saya_memiliki_pendirian_kuat" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="intrapersonal23">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal24" name="anak_saya_memiliki_pendirian_kuat" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="intrapersonal24">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal25" name="anak_saya_memiliki_pendirian_kuat" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="intrapersonal25">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal26" name="anak_saya_memiliki_pendirian_kuat" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="intrapersonal26">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya bisa menerima dirinya</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal31" name="anak_saya_bisa_menerima_dirinya" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="intrapersonal31">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal32" name="anak_saya_bisa_menerima_dirinya" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="intrapersonal32">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal33" name="anak_saya_bisa_menerima_dirinya" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="intrapersonal33">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal34" name="anak_saya_bisa_menerima_dirinya" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="intrapersonal34">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal35" name="anak_saya_bisa_menerima_dirinya" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="intrapersonal35">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal36" name="anak_saya_bisa_menerima_dirinya" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="intrapersonal36">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya memahami perasaannya</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal41" name="anak_saya_memahami_perasaannya" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="intrapersonal41">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal42" name="anak_saya_memahami_perasaannya" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="intrapersonal42">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal43" name="anak_saya_memahami_perasaannya" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="intrapersonal43">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal44" name="anak_saya_memahami_perasaannya" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="intrapersonal44">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal45" name="anak_saya_memahami_perasaannya" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="intrapersonal45">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal46" name="anak_saya_memahami_perasaannya" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="intrapersonal46">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya suka mengungkapkan perasaan</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal51" name="anak_saya_suka_mengungkapkan_perasaan" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="intrapersonal51">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal52" name="anak_saya_suka_mengungkapkan_perasaan" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="intrapersonal52">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal53" name="anak_saya_suka_mengungkapkan_perasaan" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="intrapersonal53">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal54" name="anak_saya_suka_mengungkapkan_perasaan" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="intrapersonal54">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal55" name="anak_saya_suka_mengungkapkan_perasaan" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="intrapersonal55">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal56" name="anak_saya_suka_mengungkapkan_perasaan" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="intrapersonal56">6</label>
                      </div>
                </div>
            </div>
            <div class="form-group row">
                <legend class="col-form-label col-sm-6 float-sm-left pt-0">Anak saya menyadari kesalahan</legend>
                <div class="col-sm-6">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal61" name="anak_saya_menyadari_kesalahan" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="intrapersonal61">1</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal62" name="anak_saya_menyadari_kesalahan" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="intrapersonal62">2</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal63" name="anak_saya_menyadari_kesalahan" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="intrapersonal63">3</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal64" name="anak_saya_menyadari_kesalahan" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="intrapersonal64">4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal65" name="anak_saya_menyadari_kesalahan" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="intrapersonal65">5</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="intrapersonal66" name="anak_saya_menyadari_kesalahan" class="custom-control-input" value="6">
                        <label class="custom-control-label" for="intrapersonal66">6</label>
                      </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
