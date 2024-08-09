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
                                        <th>NIK</th>
                                        <th>No.KK</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Tempat Lahir</th>
                                        <th>RT</th>
                                        <th>Golongan Keluarga</th>
                                        <th>Status Dalam Keluarga</th>
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
                ajax: '{{ route('penduduk.data') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'nik', name: 'nik' },
                    { data: 'no_kk', name: 'no_kk' },
                    { data: 'nama', name: 'nama' }, 
                    { data: 'jenis_kelamin', name: 'jenis_kelamin' },
                    { data: 'tanggal_lahir', name: 'tanggal_lahir' },
                    { data: 'tempat_lahir', name: 'tempat_lahir' },
                    { data: 'rt', name: 'rt' },
                    { data: 'golongan_keluarga', name: 'golongan_keluarga' },
                    { data: 'status_dalam_keluarga', name: 'status_dalam_keluarga' },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ],
            });
            $('#table-1').on('click','.hapusPenduduk',function (e) {
                e = $(this).data('id');
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                table = $('#table-1').DataTable();
                swal({
                    title: 'Apakah kamu yakin ingin menghapus?',
                    text: 'data yang di hapus tidak akan kembali',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: '{{route('penduduk.delete')}}',
                            method: 'post',
                            data: {
                                _token: csrfToken,
                                id: e
                            },success: function (response) {
                                // console.log(response);
                                table.ajax.reload();
                            },error: function (response) {
                                // console.log(response);
                            }

                        })
                    swal('Data berhasil di hapus'+e, {
                        icon: 'success',
                    });
                    } else {
                    swal('Data tidak dihapus');
                    }
                });
            })
            // $('.hapusPenduduk').click(function(e){
            //     e = 'uhuyy';
            //     console.log(e);
            // })
    });
</script>
    
@endpush