@extends('template.layout')

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
                        <div class="form-group col-md-4">
                            <label for="kepala_keluarga">Kepala Keluarga</label>
                            <input type="text" name="kepala_keluarga" id="kepala_keluarga" class="form-control" placeholder="Masukan NIK">
                            <input type="hidden" name="nik" id="nik">
                            <div class="invalid-feedback" id="error-kepala_keluarga"></div>
                        </div>
                    </form>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@push('libraries-css')
    <link rel="stylesheet" href="{{asset('assets/jquery-ui/jquery-ui.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/jquery-ui/jquery-ui.theme.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/jquery-ui/jquery-ui.structure.css')}}">
@endpush
@push('libraries-js')
    <script src="{{asset('assets/jquery-ui/jquery-ui.js')}}"></script>
    {{-- <script src="{{asset('assets/jquery-ui/external/jquery/jquery.js')}}"></script> --}}
@endpush

@push('scripts')
<script>

    $(document).ready(function() {
        var combinedSource = source1.concat(source2);
        $("#kepala_keluarga").autocomplete({
            // source: combinedSource,
            source: function (request, response) {
                $.ajax({
                    url:'{{route('getDataNik.kk')}}',
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function (data) {
                        response(data)
                    }
                })
            },
            minLength: 2, // Minimum panjang input sebelum pencarian dimulai
            select: function(event, ui) {
                console.log("Selected: " + ui.item.label); // Tangani item yang dipilih
                console.log(ui);
                $('kepala_keluarga').val(ui.item.value)
                $('#nik').val(ui.item.nik)
            }
        });
    });

    $('#inputData').click(function () {
        form = $('#formPenduduk').serialize();
        q = $("#no_kk").val();
        console.log(form);
        // $('.form-control').addClass('is-valid');
        $('.form-control').removeClass('is-invalid');
        $('.invalid-feedback').text('');
        $.ajax({
            url:`{{route('getDataNik.kk')}}`,
            method:'get',
            data: q,
            success: function (response) {
                console.log(response);

                // if (response.status == 'error') {
                //     swal('Gagal',response.message,'error');
                //     $('#error-no_kk').text(response.message)
                //     $('#no_kk').addClass('is-invalid');
                //     $('#error-no_kk').text(response.message)
                    
                // } else if (response.status == 'success') {
                //     // $('#formPenduduk')[0].reset()
                //     swal('Sukses',response.message,'success');
                    
                // }
            }, 
            error: function (response) {
                // console.log(response.responseJSON.errors);
                // errors = response.responseJSON.errors;
                // if (errors) {
                //     if(errors.golongan_keluarga) {
                //         // console.log(errors.golongan_keluarga[0]);
                //         $('#error-golongan_keluarga').text(errors.golongan_keluarga[0])
                //         $('#golongan_keluarga').addClass('is-invalid');
                //         swal('Kesalahan', errors.golongan_keluarga[0],'error')
                //     }
                //     if(errors.provinsi) {
                //         console.log(errors.provinsi[0]);
                //         $('#error-provinsi').text(errors.provinsi[0])
                //         $('#provinsi').addClass('is-invalid');
                //         swal('Kesalahan', errors.provinsi[0],'error')
                //     }
                //     if(errors.kecamatan) {
                //         // console.log(errors.kecamatan[0]);
                //         $('#error-kecamatan').text(errors.kecamatan[0])
                //         $('#kecamatan').addClass('is-invalid');
                //         swal('Kesalahan', errors.kecamatan[0],'error')
                //     }
                //     if(errors.kelurahan) {
                //         // console.log(errors.kelurahan[0]);
                //         $('#error-kelurahan').text(errors.kelurahan[0])
                //         $('#kelurahan').addClass('is-invalid');
                //         swal('Kesalahan', errors.kelurahan[0],'error')
                //     }
                //     if(errors.kewarganegaraan) {
                //         // console.log(errors.kewarganegaraan[0]);
                //         $('#error-kewarganegaraan').text(errors.kewarganegaraan[0])
                //         $('#kewarganegaraan').addClass('is-invalid');
                //         swal('Kesalahan', errors.kewarganegaraan[0],'error')
                //     }
                //     if(errors.status_dalam_keluarga) {
                //         // console.log(errors.status_dalam_keluarga[0]);
                //         $('#error-status_dalam_keluarga').text(errors.status_dalam_keluarga[0])
                //         $('#status_dalam_keluarga').addClass('is-invalid');
                //         swal('Kesalahan', errors.status_dalam_keluarga[0],'error')
                //     }
                //     if(errors.status_perkawinan) {
                //         // console.log(errors.status_perkawinan[0]);
                //         $('#error-status_perkawinan').text(errors.status_perkawinan[0])
                //         $('#status_perkawinan').addClass('is-invalid');
                //         swal('Kesalahan', errors.status_perkawinan[0],'error')
                //     }
                //     if(errors.pekerjaan) {
                //         // console.log(errors.pekerjaan[0]);
                //         $('#error-pekerjaan').text(errors.pekerjaan[0])
                //         $('#pekerjaan').addClass('is-invalid');
                //         swal('Kesalahan', errors.pekerjaan[0],'error')
                //     }
                //     if(errors.pendidikan_terakhir) {
                //         // console.log(errors.pendidikan_terakhir[0]);
                //         $('#error-pendidikan_terakhir').text(errors.pendidikan_terakhir[0])
                //         $('#pendidikan_terakhir').addClass('is-invalid');
                //         swal('Kesalahan', errors.pendidikan_terakhir[0],'error')
                //     }
                //     if(errors.agama) {
                //         // console.log(errors.agama[0]);
                //         $('#error-agama').text(errors.agama[0])
                //         $('#agama').addClass('is-invalid');
                //         swal('Kesalahan', errors.agama[0],'error')
                //     }
                //     if(errors.tanggal_lahir) {
                //         // console.log(errors.tanggal_lahir[0]);
                //         $('#error-tanggal_lahir').text(errors.tanggal_lahir[0])
                //         $('#tanggal_lahir').addClass('is-invalid');
                //         swal('Kesalahan', errors.tanggal_lahir[0],'error')
                //     }
                //     if(errors.tempat_lahir) {
                //         // console.log(errors.tempat_lahir[0]);
                //         $('#error-tempat_lahir').text(errors.tempat_lahir[0])
                //         $('#tempat_lahir').addClass('is-invalid');
                //         swal('Kesalahan', errors.tempat_lahir[0],'error')
                //     }
                //     if(errors.jenis_kelamin) {
                //         // console.log(errors.jenis_kelamin[0]);
                //         $('#error-jenis_kelamin').text(errors.jenis_kelamin[0])
                //         $('#jenis_kelamin').addClass('is-invalid');
                //         swal('Kesalahan', errors.jenis_kelamin[0],'error')
                //     }
                //     if(errors.nik) {
                //         // console.log(errors.nik[0]);
                //         $('#error-nik').text(errors.nik[0])
                //         $('#nik').addClass('is-invalid');
                //         swal('Kesalahan', errors.nik[0],'error')
                //     }
                //     if(errors.nama) {
                //         // console.log(errors.nama[0]);
                //         $('#error-nama').text(errors.nama[0])
                //         $('#nama').addClass('is-invalid');
                //         swal('Kesalahan', errors.nama[0],'error')
                //     }
                //     if(errors.no_kk) {
                //         // console.log(errors.no_kk[0]);
                //         $('#error-no_kk').text(errors.no_kk[0])
                //         $('#no_kk').addClass('is-invalid');
                //         swal('Kesalahan', errors.no_kk[0],'error')
                //     }
                //     if(errors.kabupaten_kota) {
                //         // console.log(errors.kabupaten_kota[0]);
                //         $('#error-kabupaten_kota').text(errors.kabupaten_kota[0])
                //         $('#kabupaten_kota').addClass('is-invalid');
                //         swal('Kesalahan', errors.kabupaten_kota[0],'error')
                //     }
                //     if(errors.rw) {
                //         // console.log(errors.rw[0]);
                //         $('#error-rw').text(errors.rw[0])
                //         $('#rw').addClass('is-invalid');
                //         swal('Kesalahan', errors.rw[0],'error')
                //     }
                //     if(errors.rt) {
                //         // console.log(errors.rt[0]);
                //         $('#error-rt').text(errors.rt[0])
                //         $('#rt').addClass('is-invalid');
                //         swal('Kesalahan', errors.rt[0],'error')
                        
                //     }
                //     if(errors.alamat) {
                //         // console.log(errors.alamat[0]);
                //         $('#error-alamat').text(errors.alamat[0])
                //         $('#alamat').addClass('is-invalid');
                //         swal('Kesalahan', errors.alamat[0],'error')
                        
                //     }
                    
                // }
            
                // if (response.status === 422) {
                // }
                

            }
        })
    })
</script>
    
@endpush