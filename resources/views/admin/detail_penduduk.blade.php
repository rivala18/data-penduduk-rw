@extends('template.layout')

@section('title'. 'Data Penduduk')

@section('content')
    <div class="section-header">
        <h1>Data Penduduk</h1>
    </div>

    <div class="section-body">
        {{-- <h2 class="section-title">Data Penduduk</h2> --}}
        <div class="row">
            {{-- <div class="col-md-1"></div> --}}
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Penduduk</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-6">NIK</div>
                                    <div class="col-6">: {{$data->nik}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">No.Kk</div>
                                    <div class="col-6"><a href="{{route('detail.kk',$data->no_kk)}}">: {{$data->no_kk}}</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Nama</div>
                                    <div class="col-6">: {{$data->nama}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Alamat</div>
                                    <div class="col-6">: {{$data->alamat}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Tempat Lahir</div>
                                    <div class="col-6">: {{$data->tempat_lahir}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Tanggal Lahir</div>
                                    <div class="col-6">: {{ \Carbon\Carbon::parse($data->tanggal_lahir)->format('d M Y')}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Umur</div>
                                    <div class="col-6">: {{$data->age}} Tahun</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Jenis Kelamin</div>
                                    <div class="col-6">: {{$data->jenis_kelamin}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Agama</div>
                                    <div class="col-6">: {{$data->agama}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Status Perkawinan</div>
                                    <div class="col-6">: {{$data->status_perkawinan}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Pekerjaan</div>
                                    <div class="col-6">: {{$data->pekerjaan}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Kewarganegaraan</div>
                                    <div class="col-6">: {{$data->kewarganegaraan}}</div>
                                </div>
                                @if ($data->no_hp)
                                    <div class="row">
                                        <div class="col-6">No.Hp</div>
                                        <div class="col-6">: {{$data->no_hp}}</div>
                                    </div>
                                    
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-6">Golongan Keluarga</div>
                                    <div class="col-6">: {{$data->kartuKeluarga->golongan_keluarga}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Rt/Rw</div>
                                    <div class="col-6">: {{$data->kartuKeluarga->rt}}/{{$data->kartuKeluarga->rw}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Kelurahan</div>
                                    <div class="col-6">: {{$data->kartuKeluarga->kelurahan}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Kecamatan</div>
                                    <div class="col-6">: {{$data->kartuKeluarga->kecamatan}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Kabupaten</div>
                                    <div class="col-6">: {{$data->kartuKeluarga->kabupaten_kota}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">Provinsi</div>
                                    <div class="col-6">: {{$data->kartuKeluarga->provinsi}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
</script>
    
@endpush