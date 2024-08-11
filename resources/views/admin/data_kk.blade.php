@extends('template.layout')
@section('csrf')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

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
                        <h4>Data Penduduk</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-reponsive">
                            <table class="table table-bordered table-lg" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>No.KK</th>
                                        <th>Kepala Keluarga</th>
                                        <th>RT</th>
                                        <th>Kelurahan</th>
                                        <th>Kecamatan</th>
                                        <th>Kabupaten</th>
                                        <th>Provinsi</th>
                                        <th>Golongan Keluarga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@push('scripts')
{{-- <script src={{asset('assets/js/datatables.js')}}></script> --}}
<script>
    $(document).ready(function() {
            $('#table-1').DataTable({
                processing: true,
                serverSide: true,
                scrollCollapse: true,
                scroller: true,
                scrollY: 500,
                paging: true,
                ajax: '{{ route('getData.kk') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'no_kk', name: 'no_kk' },
                    { data: 'kepala_keluarga', name: 'kepala_keluarga' },
                    { data: 'rt', name: 'rt' },
                    { data: 'kelurahan', name: 'kelurahan' },
                    { data: 'kecamatan', name: 'kecamatan' },
                    { data: 'kabupaten_kota', name: 'kabupaten_kota' },
                    { data: 'provinsi', name: 'provinsi' },
                    { data: 'golongan_keluarga', name: 'golongan_keluarga' },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ],
            });
            // $('#table-1').on('click','.hapusPenduduk',function (e) {
            //     e = $(this).data('id');
            //     var csrfToken = $('meta[name="csrf-token"]').attr('content');
            //     table = $('#table-1').DataTable();
            //     swal({
            //         title: 'Apakah kamu yakin ingin menghapus?',
            //         text: 'data yang di hapus tidak akan kembali',
            //         icon: 'warning',
            //         buttons: true,
            //         dangerMode: true,
            //         })
            //         .then((willDelete) => {
            //         if (willDelete) {
            //             $.ajax({
            //                 url: '{{route('penduduk.delete')}}',
            //                 method: 'post',
            //                 data: {
            //                     _token: csrfToken,
            //                     id: e
            //                 },success: function (response) {
            //                     // console.log(response);
            //                     table.ajax.reload();
            //                 },error: function (response) {
            //                     // console.log(response);
            //                 }

            //             })
            //         swal('Data berhasil di hapus'+e, {
            //             icon: 'success',
            //         });
            //         } else {
            //         swal('Data tidak dihapus');
            //         }
            //     });
            // })
            // $('.hapusPenduduk').click(function(e){
            //     e = 'uhuyy';
            //     console.log(e);
            // })
    });
</script>
    
@endpush