@extends('template.layout')

@section('title'. 'Data Penduduk')

@section('content')
    <div class="section-header">
        <h1>Data Penduduk</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Data Penduduk</h2>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Input Data Penduduk</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" id="formPenduduk" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control">
                                    <div class="invalid-feedback" id="error-alamat"></div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="rt">RT</label>
                                    <input type="number" name="rt" id="rt" class="form-control">
                                    <div class="invalid-feedback" id="error-rt"></div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="rw">RW</label>
                                    <input type="number" name="rw" id="rw" class="form-control disable" value="2" readonly>
                                    <div class="invalid-feedback" id="error-rw"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="kabupaten">Kabupaten/Kota</label>
                                    <input type="text" name="kabupaten_kota" id="kabupaten_kota" class="form-control" value="BANDUNG" readonly>
                                    <div class="invalid-feedback" id="error-kabupaten_kota"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="no_kk">NO KK</label>
                                    <input type="number" class="form-control" name="no_kk" id="no_kk">
                                    <div class="invalid-feedback" id="error-no_kk"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" id="nama">
                                    <div class="invalid-feedback" id="error-nama"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nik">NIK</label>
                                    <input type="number" class="form-control" name="nik" id="nik">
                                    <div class="invalid-feedback" id="error-nik"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <div class="invalid-feedback" id="error-jenis_kelamin"></div>
                                </div>
                                
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                                    <div class="invalid-feedback" id="error-tempat_lahir"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                                    <div class="invalid-feedback" id="error-tanggal_lahir"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="agama">Agama</label>
                                    <select name="agama" id="agama" class="form-control">Agama
                                        <option value="islam">Islam</option>
                                        <option value="kristen_protestan">Kristen Protestan</option>
                                        <option value="katolik">Katolik</option>
                                        <option value="budha">Budha</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="konghucu">Konghucu</option>
                                    </select>
                                    <div class="invalid-feedback" id="error-agama"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                    <input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir">
                                    <div class="invalid-feedback" id="error-pendidikan_terakhir"></div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control">
                                    <div class="invalid-feedback" id="error-pekerjaan"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="status_perkawinan">Status Perkawinan</label>
                                    <select name="status_perkawinan" id="status_perkawinan" class="form-control">
                                        <option value="menikah">Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                    </select>
                                    <div class="invalid-feedback" id="error-status_perkawinan"></div>

                                </div>
                                <div class="form-group col-md-3">
                                    <label for="status_dalam_keluarga">Status Dalam Keluarga</label>
                                    <select name="status_dalam_keluarga" id="status_dalam_keluarga" class="form-control">
                                        <option value=""></option>
                                        <option value="Kepala Keluarga">Kepala Keluarga</option>
                                        <option value="Ayah">Ayah</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Kakek">Kakek</option>
                                        <option value="Nenek">Nenek</option>
                                        <option value="Bibi">Bibi</option>
                                        <option value="Paman">Paman</option>
                                        <option value="Sepupu">Sepupu</option>
                                        <option value="Menantu">Menantu</option>
                                        <option value="Mertua">Mertua</option>
                                        <option value="Ayah Tiri">Ayah Tiri</option>
                                        <option value="Ibu Tiri">Ibu Tiri</option>
                                        <option value="Keponakan">Keponakan</option>
                                    </select>
                                    <div class="invalid-feedback" id="error-status_dalam_keluarga"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="kewarganegaraan">Kewarganegaraan</label>
                                    <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control" readonly value="Indonesia">
                                    <div class="invalid-feedback" id="error-kewarganegaraan"></div>
                                </div>

                                
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="kelurahan">Kelurahan</label>
                                    <input type="text" name="kelurahan" id="kelurahan" class="form-control" value="Babakan Peuteuy" readonly>
                                    <div class="invalid-feedback" id="error-kelurahan"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="Cicalengka" readonly>
                                    <div class="invalid-feedback" id="error-kecamatan"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" name="provinsi" id="provinsi" class="form-control" value="Jawa Barat" readonly>
                                    <div class="invalid-feedback" id="error-provinsi"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="golongan_keluarga">Golongan Keluarga</label>
                                    <select name="golongan_keluarga" id="golongan_keluarga" class="form-control">
                                        <option value=""></option>
                                        <option value="Mampu">Mampu</option>
                                        <option value="Tidak mampu">Tidak mampu</option>
                                    </select>
                                    <div class="invalid-feedback" id="error-golongan_keluarga"></div>
                                </div>
                                
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="No.Hp">No.Hp</label>
                                    <input type="text" name="no_hp" id="no_hp" name="no_hp" class="form-control" placeholder="Opsional">
                                </div>
                                <div class="form-group col-md-3">
                                    <button type="button" class="btn btn-lg btn-primary" id="inputData">Input</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $('#inputData').click(function () {
        form = $('#formPenduduk').serialize();
        console.log(form);
        // $('.form-control').addClass('is-valid');
        $('.form-control').removeClass('is-invalid');
        $('.invalid-feedback').text('');
        $.ajax({
            url:' {{route('penduduk.create')}} ',
            method:'post',
            data: form,
            success: function (response) {
                console.log(response);
                if (response.status == 'error') {
                    swal('Gagal',response.message,'error');
                    $('#error-no_kk').text(response.message)
                    $('#no_kk').addClass('is-invalid');
                    $('#error-no_kk').text(response.message)
                    
                } else if (response.status == 'success') {
                    swal('Sukses',response.message,'success');
                    // $('#formPenduduk')[0].reset()
                    
                }
            }, 
            error: function (response) {
                console.log(response.responseJSON.errors);
                errors = response.responseJSON.errors;
                if (errors) {
                    if(errors.golongan_keluarga) {
                        // console.log(errors.golongan_keluarga[0]);
                        $('#error-golongan_keluarga').text(errors.golongan_keluarga[0])
                        $('#golongan_keluarga').addClass('is-invalid');
                        swal('Kesalahan', errors.golongan_keluarga[0],'error')
                    }
                    if(errors.provinsi) {
                        console.log(errors.provinsi[0]);
                        $('#error-provinsi').text(errors.provinsi[0])
                        $('#provinsi').addClass('is-invalid');
                        swal('Kesalahan', errors.provinsi[0],'error')
                    }
                    if(errors.kecamatan) {
                        // console.log(errors.kecamatan[0]);
                        $('#error-kecamatan').text(errors.kecamatan[0])
                        $('#kecamatan').addClass('is-invalid');
                        swal('Kesalahan', errors.kecamatan[0],'error')
                    }
                    if(errors.kelurahan) {
                        // console.log(errors.kelurahan[0]);
                        $('#error-kelurahan').text(errors.kelurahan[0])
                        $('#kelurahan').addClass('is-invalid');
                        swal('Kesalahan', errors.kelurahan[0],'error')
                    }
                    if(errors.kewarganegaraan) {
                        // console.log(errors.kewarganegaraan[0]);
                        $('#error-kewarganegaraan').text(errors.kewarganegaraan[0])
                        $('#kewarganegaraan').addClass('is-invalid');
                        swal('Kesalahan', errors.kewarganegaraan[0],'error')
                    }
                    if(errors.status_dalam_keluarga) {
                        // console.log(errors.status_dalam_keluarga[0]);
                        $('#error-status_dalam_keluarga').text(errors.status_dalam_keluarga[0])
                        $('#status_dalam_keluarga').addClass('is-invalid');
                        swal('Kesalahan', errors.status_dalam_keluarga[0],'error')
                    }
                    if(errors.status_perkawinan) {
                        // console.log(errors.status_perkawinan[0]);
                        $('#error-status_perkawinan').text(errors.status_perkawinan[0])
                        $('#status_perkawinan').addClass('is-invalid');
                        swal('Kesalahan', errors.status_perkawinan[0],'error')
                    }
                    if(errors.pekerjaan) {
                        // console.log(errors.pekerjaan[0]);
                        $('#error-pekerjaan').text(errors.pekerjaan[0])
                        $('#pekerjaan').addClass('is-invalid');
                        swal('Kesalahan', errors.pekerjaan[0],'error')
                    }
                    if(errors.pendidikan_terakhir) {
                        // console.log(errors.pendidikan_terakhir[0]);
                        $('#error-pendidikan_terakhir').text(errors.pendidikan_terakhir[0])
                        $('#pendidikan_terakhir').addClass('is-invalid');
                        swal('Kesalahan', errors.pendidikan_terakhir[0],'error')
                    }
                    if(errors.agama) {
                        // console.log(errors.agama[0]);
                        $('#error-agama').text(errors.agama[0])
                        $('#agama').addClass('is-invalid');
                        swal('Kesalahan', errors.agama[0],'error')
                    }
                    if(errors.tanggal_lahir) {
                        // console.log(errors.tanggal_lahir[0]);
                        $('#error-tanggal_lahir').text(errors.tanggal_lahir[0])
                        $('#tanggal_lahir').addClass('is-invalid');
                        swal('Kesalahan', errors.tanggal_lahir[0],'error')
                    }
                    if(errors.tempat_lahir) {
                        // console.log(errors.tempat_lahir[0]);
                        $('#error-tempat_lahir').text(errors.tempat_lahir[0])
                        $('#tempat_lahir').addClass('is-invalid');
                        swal('Kesalahan', errors.tempat_lahir[0],'error')
                    }
                    if(errors.jenis_kelamin) {
                        // console.log(errors.jenis_kelamin[0]);
                        $('#error-jenis_kelamin').text(errors.jenis_kelamin[0])
                        $('#jenis_kelamin').addClass('is-invalid');
                        swal('Kesalahan', errors.jenis_kelamin[0],'error')
                    }
                    if(errors.nik) {
                        // console.log(errors.nik[0]);
                        $('#error-nik').text(errors.nik[0])
                        $('#nik').addClass('is-invalid');
                        swal('Kesalahan', errors.nik[0],'error')
                    }
                    if(errors.nama) {
                        // console.log(errors.nama[0]);
                        $('#error-nama').text(errors.nama[0])
                        $('#nama').addClass('is-invalid');
                        swal('Kesalahan', errors.nama[0],'error')
                    }
                    if(errors.no_kk) {
                        // console.log(errors.no_kk[0]);
                        $('#error-no_kk').text(errors.no_kk[0])
                        $('#no_kk').addClass('is-invalid');
                        swal('Kesalahan', errors.no_kk[0],'error')
                    }
                    if(errors.kabupaten_kota) {
                        // console.log(errors.kabupaten_kota[0]);
                        $('#error-kabupaten_kota').text(errors.kabupaten_kota[0])
                        $('#kabupaten_kota').addClass('is-invalid');
                        swal('Kesalahan', errors.kabupaten_kota[0],'error')
                    }
                    if(errors.rw) {
                        // console.log(errors.rw[0]);
                        $('#error-rw').text(errors.rw[0])
                        $('#rw').addClass('is-invalid');
                        swal('Kesalahan', errors.rw[0],'error')
                    }
                    if(errors.rt) {
                        // console.log(errors.rt[0]);
                        $('#error-rt').text(errors.rt[0])
                        $('#rt').addClass('is-invalid');
                        swal('Kesalahan', errors.rt[0],'error')
                        
                    }
                    if(errors.alamat) {
                        // console.log(errors.alamat[0]);
                        $('#error-alamat').text(errors.alamat[0])
                        $('#alamat').addClass('is-invalid');
                        swal('Kesalahan', errors.alamat[0],'error')
                        
                    }
                    
                }
            
                // if (response.status === 422) {
                // }
                

            }
        })
    })
</script>
    
@endpush