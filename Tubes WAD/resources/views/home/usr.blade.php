@extends('bootstrap_template')

@section('content')
    <img width="100%" src="{{asset('elkatp')}}/jbt.png">

    <div class="container mt-5">
        <h1 class="justify-content-center text-center">
            Sistem Pelayanan Online
        </h1>
    </div>

    <hr style="width: 50%;  border: 1px solid #EDDE55;
        border-radius: 5px;">

    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-6">
                <a href="{{url('user/akta-kematian')}}">
                    <img src="{{asset('elkatp')}}/card_akta_kematian.png">
                </a>
            </div>

            <div class="col-6">
                <a href="{{url('user/kk')}}">
                    <img src="{{asset('elkatp')}}/card_kartu_keluarga.png">
                </a>
            </div>

            <div class="col-6">
                <a href="{{url('user/kedatangan')}}">
                <img src="{{asset('elkatp')}}/card_kedatangan.png">
                </a>
            </div>

            <div class="col-6">
                <a href="{{url('user/perpindahan')}}">
                    <img src="{{asset('elkatp')}}/card_perpindahan.png">
                </a>
            </div>

            <div class="col-6">
                <a href="{{url('user/kartu-anak')}}">
                    <img src="{{asset('elkatp')}}/card_kartu_anak.png">
                </a>
            </div>
        </div>
    </div>
@endsection
