@extends('bootstrap_template')

@section('content')

    <div class="container mt-5" style="margin-top: 130px !important;">
        <h1 class="justify-content-center text-center">
            Kartu Keluarga
        </h1>
    </div>

    <div class="container">
        @include('components.message')
    </div>

    <hr style="width: 50%;  border: 1px solid #EDDE55;
                                            border-radius: 5px;">

    <div class="container mt-5 mb-3">
        <div style=" background-color: #EDEDED; padding: 20px">
            <h5>Data KK</h5>
            <hr style="width:100%;  border: 1px solid #C0C0C0; border-radius: 5px;">

            @if ($kk != null)
                <div class="row">
                    <div class="col-6">
                        <h5>Nama Kepala Keluarga :</h5>
                    </div>
                    <div class="col-6">
                        <h5>{{ $kk->kepala_keluarga }}</h5>
                    </div>

                    <div class="col-6">
                        <h5>Kecamatan :</h5>
                    </div>
                    <div class="col-6">
                        <h5>{{ $kk->kecamatan }}</h5>
                    </div>

                    <div class="col-6">
                        <h5>Desa/Kelurahan :</h5>
                    </div>
                    <div class="col-6">
                        <h5>{{ $kk->kelurahan }}</h5>
                    </div>

                    <div class="col-6">
                        <h5>RT/RW :</h5>
                    </div>
                    <div class="col-6">
                        <h5>{{ $kk->rtrw }}</h5>
                    </div>

                </div>
            @else

                <div class="alert alert-primary" role="alert">
                    <strong>Belum Ada KK</strong><br>
                    Anda Belum memiliki kartu keluarga, silakan tambahkan dibawah
                </div>

                <div style="border: solid black; border-radius: 20px; padding: 20px">
                    <form action="{{ url('/kk/input') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nomor Kartu Keluarga</label>
                            <input type="text" required value="{{ Auth::user()->nomor_kk }}" readonly
                                   class="form-control" name="nokk" aria-describedby="helpId"
                                   placeholder="Nomor Kartu Keluarga">
                            <small id="helpId" class="form-text text-muted">Nomor Kartu Keluarga</small>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kepala Keluarga</label>
                            <input type="text" required class="form-control" name="kepala_keluarga" id=""
                                   aria-describedby="helpId" placeholder="Nama Kepala Keluarga">
                            <small id="helpId" class="form-text text-muted">Nama Kepala Keluarga</small>
                        </div>
                        <div class="form-group">
                            <label for="">Kelurahan</label>
                            <input type="text" required class="form-control" name="kelurahan" id=""
                                   aria-describedby="helpId" placeholder="Kelurahan">
                            <small id="helpId" class="form-text text-muted">Kelurahan</small>
                        </div>
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" required class="form-control" name="kecamatan" id=""
                                   aria-describedby="helpId" placeholder="Kecamatan">
                            <small id="helpId" class="form-text text-muted">Kecamatan</small>
                        </div>
                        <div class="form-group">
                            <label for="">RT/RW</label>
                            <input type="text" required class="form-control" name="rtrw" id="" aria-describedby="helpId"
                                   placeholder="RT/RW">
                            <small id="helpId" class="form-text text-muted">RT dan RW</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>

                <script>
                    $(".alert").alert();
                </script>

            @endif
        </div>
    </div>



    <div class="container">
        <div style="background-color: #EDEDED; padding: 20px">

        @if ($kk != null)
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modelId">
                    Tambah Anggota Keluarga
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
                                <form action="{{ url('/kk/add-anggota') }}" method="post">
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

        @endif


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

                @forelse ($anggota as $data)
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
    </div>

    <div class="container" style="margin-top: 20px">
        <div style="background-color: #EDEDED; padding: 20px">
            <h4>Ketentuan</h4>
            <hr style="width:100%;  border: 1px solid #C0C0C0; border-radius: 5px;">
            <ul>
                <li>Data yang masuk ke dalam Kartu Keluarga hanya data dengan status aktif (tanda centang )</li>
                <li>Detail dan perubahan elemen data anggota keluarga dapat dilakukan di halaman selanjutnya</li>
                <li>Tidak dapat melakukan penambahan/pengurangan Anggota keluarga.</li>
                <li> Menu Kelahiran/Kematian ada tersendiri dan harus diproses sampai selesai.</li>
                <li>Tidak dapat melakukan Perpindahan alamat antar wilayah (Desa/Kecamatan/Kabupaten/Provinsi). Menu
                    perpindahan antar Kabupaten/Provinsi ada tersendiri.
                </li>
                <li> Tidak dapat melakukan Perpindahan alamat antar wilayah (Desa/Kecamatan/Kabupaten/Provinsi). Menu
                    perpindahan antar Kabupaten/Provinsi ada tersendiri.
                </li>
            </ul>

            <h4>Pengajuan Perubahan Data</h4>
            <hr style="width:100%;  border: 1px solid #C0C0C0; border-radius: 5px;">
            <form action="{{ url('/pengajuan/input') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <div class="form-group">
                    <label for="">Jenis Pengajuan</label>
                    <select class="form-control" name="type" id="">
                        <option>Perubahan Data KK</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Detail Pengajuan Perubahan</label>
                    <textarea class="form-control" name="detail" id="" rows="5" placeholder="Mohon cantumkan keterangan selengkapnya, misal : Pengajuan KK karena Perubahan Pekerjaan Kepala Keluarga dan detail perubahan "></textarea>
                    <button type="submit" class="btn btn-primary">Input Pengajuan</button>
                </div>
            </form>

        </div>
    </div>


@endsection
