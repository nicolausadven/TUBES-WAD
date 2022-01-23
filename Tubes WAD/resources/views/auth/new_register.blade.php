@extends('nav')

@section('content')

    <div class="container mt-5" style="margin-top: 200px!important;">
        <h1 class="justify-content-center text-center">
            Registrasi Sistem Pelayanan Online
        </h1>
    </div>

    <hr style="width: 50%;  border: 1px solid #EDDE55;
                        border-radius: 5px;">

    <div class="container mt-5 mb-3">
        <div class="row">

            @if (session()->has('errors'))
                <div class="col-12">
                    <div class="alert alert-primary alert-danger fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong> {!! implode('', $errors->all('<div>:message</div>')) !!}</strong>
                    </div>
                </div>

            @endif

            @if (session()->has('success'))

                <div class="col-12">
                    <div class="alert alert-primary alert-success fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{{ Session::get('success') }}</strong>

                    </div>
                </div>

            @endif


            <div class="col-12 row">

                <div class="col-7 mx-auto justify-content-center">
                    <div class="card border-black" style="border-radius: 20px!important">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <form action="{{ url('/regis-user') }}" method="post">
                                @csrf
                                <h4 class="card-title text-center">Registrasi</h4>

                                <div class="alert alert-primary" role="alert">
                                    <strong>Informasi Penting</strong>
                                    <ul>
                                        <li>Gunakan Nomor Whatsapp Pribadi Ketika Melakukan Pendaftaran</li>
                                        <li>Seluruh Layanan Gratis dan Tidak Dipungut Biaya</li>
                                    </ul>
                                </div>

                                <div class="form-group">
                                    <label for="">NIK</label>
                                    <input type="text" class="form-control" value="{{ old('nik') }}" name="nik" id=""
                                           aria-describedby="helpId" placeholder="Nomor Induk Kependudukan">
                                    <small id="helpId" class="form-text text-muted">NIK</small>
                                </div>

                                <div class="form-group">
                                    <label for="">Nomor KK</label>
                                    <input type="text" class="form-control" value="{{ old('no_kk') }}" name="no_kk"
                                           id=""
                                           aria-describedby="helpId" placeholder="Nomor Kartu Keluarga">
                                    <small id="helpId" class="form-text text-muted">Nomor KK</small>
                                </div>

                                <div class="form-group">
                                    <label for="">Nomor HP</label>
                                    <input type="text" class="form-control" value="{{ old('contact') }}" name="contact"
                                           id="" aria-describedby="helpId" placeholder="Nomor Kartu Keluarga">
                                    <small id="helpId" class="form-text text-muted">Kontak</small>
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password1" id=""
                                           aria-describedby="helpId" placeholder="Password">
                                    <small id="helpId" class="form-text text-muted">Password</small>
                                </div>

                                <div class="form-group">
                                    <label for="">Ulangi Password</label>
                                    <input type="password" class="form-control" name="password2" id=""
                                           aria-describedby="helpId" placeholder="Ulangi Password">
                                    <small id="helpId" class="form-text text-muted">Ulangi Password</small>
                                </div>

                                <button type="submit" class="btn btn-primary">Registrasi</button>

                                <p class="text-center">Sudah Punya Akun ? Login <a
                                        href="{{ url('/login-pengguna') }}">Disini </a></p>

                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
