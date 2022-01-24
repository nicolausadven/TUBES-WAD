@extends('bootstrap_template')

@section('content')

    <div class="container mt-5" style="margin-top: 130px !important;">
        <h1 class="justify-content-center text-center">
            Akta Kematian
        </h1>
    </div>

    <div class="container">
        @include('components.message')
    </div>

    <hr style="width: 50%;  border: 1px solid #EDDE55;
                                            border-radius: 5px;">

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama Lengkap</th>
                <th>L/P</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Akta Kelahiran</th>
                <th>Status Hubungan Keluarga</th>
                <th>Keterangan</th>
            </tr>
            </thead>
            <tbody>

            @forelse ($datas as $data)
                <tr>
                    <td scope="row">{{$loop->iteration}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->jk}}</td>
                    <td>{{$data->tempat_lahir}}</td>
                    <td>{{$data->tanggal_lahir}}</td>
                    <td>{{$data->status_hubungan_keluarga}}</td>
                    <td>{{$data->ket}}</td>
                </tr>

            @empty

            @endforelse

            </tbody>
        </table>
    </div>

    <div class="container" style="margin-top: 20px">
        <div style="background-color: #EDEDED; padding: 20px">
            <h4>Lapor Keluarga Meninggal</h4>
            <hr style="width:100%;  border: 1px solid #C0C0C0; border-radius: 5px;">
            <form action="{{ url('/akta-kematian/input') }}" method="post">
                @csrf
                <input type="hidden" name="anggota_id" value="{{Auth::id()}}">
                <div class="form-group">
                    <label for="">Anggota Keluarga Yang Meninggal : </label>
                    <select class="form-control" name="type" id="">

                        @forelse ($datas as $data)
                            <option value="{{$data->id}}">{{$data->nama}}</option>
                        @empty

                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-4">Input Data</button>
                </div>
            </form>

        </div>
    </div>


@endsection
