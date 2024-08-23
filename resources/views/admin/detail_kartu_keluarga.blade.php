@extends('template.layout')

@section('title'. 'Data Penduduk')

@section('content')
    <div class="section-header">
        <h1>Data Kartu Keluarga Penduduk</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Data Kartu Keluarga Penduduk</h2>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Kartu Keluarga Penduduk</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-6">Kepala Keluarga</div>
                                    <div class="col-6">: {{$kartu_keluarga->kepala_keluarga}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">No.Kk</div>
                                    <div class="col-6">: {{$kartu_keluarga->no_kk}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Golongan Keluarga</div>
                                    <div class="col-6">: {{$kartu_keluarga->golongan_keluarga}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Rt/Rw</div>
                                    <div class="col-6">: {{$kartu_keluarga->rt}}/{{$kartu_keluarga->rw}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Kelurahan</div>
                                    <div class="col-6">: {{$kartu_keluarga->kelurahan}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Kecamatan</div>
                                    <div class="col-6">: {{$kartu_keluarga->kecamatan}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Kabupaten</div>
                                    <div class="col-6">: {{$kartu_keluarga->kabupaten_kota}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Provinsi</div>
                                    <div class="col-6">: {{$kartu_keluarga->provinsi}}</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Anggota Keluarga</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-md table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Umur</th>
                                        <th>Tempat Lahir</th>
                                        <th>Status Dalam Keluarga</th>
                                        <th>No.Hp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penduduk as $row)
                                        <tr>
                                            <td> {{$loop->iteration}} </td>
                                            <td> {{$row->nik}} </td>
                                            <td> {{$row->nama}} </td>
                                            <td> {{$row->jenis_kelamin}} </td>
                                            <td> {{\Carbon\Carbon::parse($row->tanggal_lahir)->format('d M Y')}} </td>
                                            <td> {{$row->age}} </td>
                                            <td> {{$row->tempat_lahir}} </td>
                                            <td> {{$row->status_dalam_keluarga}} </td>
                                            <td> {{$row->no_hp}} </td>
                                            <td>
                                                <a href="{{route('penduduk.edit', $row->id)}}" class="btn btn-primary btn-icon btn-sm">
                                                    <i class="far fa-edit">
                                                    </i>
                                                </a> 
                                                <a href="#table-1" class="btn btn-danger btn-icon btn-sm hapusPenduduk" data-id="{{$row->id}}">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                </a> 
                                                <a href="{{route('penduduk.detail', $row->id)}}" class="btn btn-info btn-icon btn-sm">
                                                    <i class="far fa-user">
                                                    </i>
                                                </a> 
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="table-responsive">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $('#table-1').DataTable()
</script>
    
@endpush