@extends('bootstrap_template')

@section('content')
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body class='mt-5 '>
<section class="vh-100" style="background-color: white">
<div class="p-2 p-md-0 mb-2 text-black mt-2">
    <br>
    <h2 class="display-4 text-center">Persyaratan</h2>
    <hr size=6></hr>
</div>
<div class="container mb-5">
    <!-- <div class="text-align-left">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-bs-toggle="collapse" data-bs-target="#demo1">Akta Kelahiran</button>
        <div id="demo1" class="collapse text-align-left">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
    </div>
    <br>
    <div class="text-align-left">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-bs-toggle="collapse" data-bs-target="#demo2">KTP Elektronik</button>
        <div id="demo2" class="collapse text-align-left">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
    </div> -->
    <br>
    <div class="text-align-left">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-bs-toggle="collapse" data-bs-target="#demo3">Kartu Keluarga</button>
        <div id="demo3" class="collapse text-align-left">
        <ul>
	<li>
    Penambahan anggota keluarga (Anak/Cucu/Lainnya) belum memiliki NIK usia 0 s/d 18 tahun diajukan melalui pelaporan Akta Kelahiran</li>
	<li>
		Mengisi Formulir</li>
	<li>
		Data Dukung (Akta Kelahiran/Buku Nikah/Akta Perkawinan/Akta Perceraian/Ijazah terakhir/Data dukung lainnya)</li>
</ul>
        </div>
    </div>
    <br>
    <div class="text-align-left">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-bs-toggle="collapse" data-bs-target="#demo4">Kedatangan</button>
        <div id="demo4" class="collapse text-align-left">
        <ul>
	<li>
    Surat Keterangan Pindah dari daerah asal</li>
	<li>
    KTP-el bagi yang memiliki yang sudah dipotong pada bagian tanda tangannya</li>
	<li>
		Data Dukung (Akta Kelahiran/Buku Nikah/Akta Perkawinan/Akta Perceraian/Ijazah terakhir/Data dukung lainnya)</li>
</ul>
        </div>
    </div>
    <br>
    <div class="text-align-left">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-bs-toggle="collapse" data-bs-target="#demo5">Perpindahan</button>
        <div id="demo5" class="collapse text-align-left">
        <ul>
	<li>
    Kartu Keluarga yang sudah dipotong pada bagian QR Code atau tanda tangan Kepala Dinas</li>
	<li>
		KTP-El bagi yang sudah memiliki</li>
	<li>
		Data Dukung (Akta Kelahiran/Buku Nikah/Akta Perkawinan/Akta Perceraian/Ijazah terakhir/Data dukung lainnya)</li>
</ul>
        </div>
    </div>
    <br>
    <div class="text-align-left">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-bs-toggle="collapse" data-bs-target="#demo6">Kartu Anak</button>
        <div id="demo6" class="collapse text-align-left">
        <ul>
	<li>
		Kartu Keluarga yang sudah ditandatangani oleh Kepala Keluarga</li>
	<li>
		Akta Kelahiran</li>
	<li>
		KTP-El asli Kedua Orang Tua/Wali (untuk anak usia 0-5 tahun kurang 1 hari)</li>
	<li>
		Pas foto berwarna ukuran 2x3 (untuk anak usia 5-17 tahun kurang 1 hari)</li>
</ul>
        </div>
    </div>
    <br>
    <div class="text-align-left ">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-bs-toggle="collapse" data-bs-target="#demo7">Akta Kematian</button>
        <div id="demo7" class="collapse text-align-left">
        <ul>
	<li>
		Kartu Keluarga yang sudah ditandatangani</li>
	<li>
		KTP Elektronik</li>
	<li>
		Foto/Screenshot bukti error dari instansi tujuan</li>
</ul>
        </div>
    </div>
</div>
</section>
</body>
</html>
@endsection