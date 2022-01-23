@extends('bootstrap_template')

@section('content')

    <div class="container mt-5" style="margin-top: 130px !important;">
        <h1 class="justify-content-center text-center">
            Kartu Identitas Anak
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

    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modelId">
            Ajukan Kartu Identitas Anak
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Anggota Keluarga</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/kartu-anak/add') }}" method="post">
                            @csrf
                            <input hidden name="no_kk" value="{{$kk->no_kk}}">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" required
                                       class="form-control" name="nama" aria-describedby="helpId"
                                       placeholder="Nama">
                                <small id="helpId" class="form-text text-muted">Nama Anggota Keluarga</small>
                            </div>

                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select class="form-control" name="jk" id="">
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" required class="form-control" name="tempat_lahir" id=""
                                       aria-describedby="helpId" placeholder="Tempat Lahir">
                                <small id="helpId" class="form-text text-muted">Tempat Lahir</small>
                            </div>

                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date"
                                       class="form-control" name="tanggal_lahir" id="" aria-describedby="helpId"
                                       placeholder="Tanggal Lahir">
                            </div>

                            <div class="form-group">
                                <label for="">Status Hubungan Keluarga</label>
                                <input type="text"
                                       class="form-control" name="status_hubungan_keluarga" id=""
                                       aria-describedby="helpId"
                                       placeholder="Status Hubungan Keluarga">
                            </div>

                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container" style="margin-top: 20px">
        <div style="background-color: #EDEDED; padding: 20px">
            <h4>Pengajuan Perubahan Data</h4>
            <hr style="width:100%;  border: 1px solid #C0C0C0; border-radius: 5px;">
            <form action="{{ url('/pengajuan/input') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <div class="form-group">
                    <label for="">Jenis Pengajuan</label>
                    <select class="form-control" name="type" id="">
                        <option>Perubahan Data Kartu Anak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Detail Pengajuan Perubahan</label>
                    <textarea class="form-control" name="detail" id="" rows="5" placeholder="Mohon cantumkan keterangan selengkapnya, misal : Pengajuan KK karena Perubahan Pekerjaan Kepala Keluarga dan detail perubahan "></textarea>
                    <button type="submit" class="btn btn-primary mt-4">Input Pengajuan</button>
                </div>
            </form>

        </div>
    </div>



@endsection
