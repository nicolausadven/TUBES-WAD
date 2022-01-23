@extends('nav')

@section('content')

    <div class="container mt-5" style="margin-top: 200px!important;">
        <h1 class="justify-content-center text-center">
            Sistem Pelayanan Online
        </h1>
    </div>

    <hr style="width: 50%;  border: 1px solid #EDDE55;
                        border-radius: 5px;">

    <div class="container mt-5 mb-3">
        <div class="row">

            <div class="col-12">
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
            </div>
            <div class="col-12 row">

                <div class="col-7 mx-auto justify-content-center">
                    <form action="{{ url('/login-user') }}" method="post">
                        @csrf
                        <div class="card border-black" style="border-radius: 20px!important">
                            <img class="card-img-top" src="holder.js/100px180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title text-center">Login</h4>

                                <div class="alert alert-primary" role="alert">
                                    <strong>Gunakan NIK sebagai username</strong>
                                </div>


                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" name="nik" id=""
                                        aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Username</small>
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password" id=""
                                        aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Password</small>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>

                                <p class="text-center">Belum Punya Akun? Registasi <a
                                        href="{{ url('/registrasi-pengguna') }}">Disini </a></p>


                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
