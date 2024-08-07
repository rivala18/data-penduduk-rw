<?php

namespace App\Http\Controllers;

use App\Models\FamilyRegistrationCard;
use App\Models\Resident;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PendudukController extends Controller
{
    protected $resident;
    protected $kartu_keluarga;

    public function __construct()
    {
        $this->resident = Resident::get();
        $this->kartu_keluarga = FamilyRegistrationCard::get();
    }

    public function _validation($request) {
        $request->validate([        //validasi input
            'nama'=>'required|min:1',
            'nik'=>'required|unique:residents,nik|numeric',
            'no_kk'=>'required|numeric',
            // 'no_kk'=>'required|unique:family_registration_cards,no_kk|numeric',
            'tempat_lahir'=>'required|min:3',
            'tanggal_lahir'=>'required|date',
            'kabupaten_kota'=>'required|min:3',
            'provinsi'=>'required|min:3',
            'golongan_keluarga'=>'required|min:3',
            'status_dalam_keluarga'=>'required|min:3',
            'pendidikan_terakhir'=>'required|min:2',
            'jenis_kelamin'=>'required',
            'alamat'=>'required|max:255',
            'rt'=>'required|numeric|min:1',
            'rw'=>'required|numeric|min:1',
            'kelurahan'=>'required|min:3|max:20',
            'kecamatan'=>'required|min:3|max:20',
            'agama'=>'required|min:3|max:20',
            'status_perkawinan'=>'required|min:3|max:20',
            'pekerjaan'=>'required|min:3|max:20',
            'kewarganegaraan'=>'required|min:3|max:20',
        ],[
            'nama.required'=>'Nama harus di isi!!!',
            'nik.required'=>'NIK harus di isi angka!!!',
            'no_kk.required'=>'No,KK harus di isi angka!!!',
            'tanggal_lahir.required'=>'Tanggal lahir harus di isi!!!',
            'kabupaten_kota.required'=>'Kabupaten/Kota harus di isi!!!',
            'provinsi.required'=>'Provinsi harus di isi!!!',
            'golongan_keluarga.required'=>'Golongan Keluarga harus di isi!!!',
            'status_dalam_keluarga.required'=>'Status Dalam Hubungan Keluarga harus di isi!!!',
            'pendidikan_terakhir.required'=>'Pendidikan Terakhir harus di isi!!!',
            'tempat_lahir.required'=>'Tempat lahir harus di isi!!!',
            'jenis_kelamin.required'=>'Jenis Kelamin harus di isi!!!',
            'alamat.required'=>'Alamat harus di isi!!!',
            'rt.required'=>'RT harus di isi angka!!!',
            'rw.required'=>'RW harus di isi angka!!!',
            'kelurahan.required'=>'Kelurahan harus di isi!!!',
            'kecamatan.required'=>'Kecamatan harus di isi!!!',
            'agama.required'=>'Agama harus di isi!!!',
            'status_perkawinan.required'=>'Status perkawinan harus di isi!!!',
            'pekerjaan.required'=>'Pekerjaan harus di isi!!!',
            'kewarganegaraan.required'=>'Kewarganegaraan harus di isi!!!',
            'nama.min'=>'Nama harus di isi minimal 1 huruf!!!',
            'tempat_lahir.min'=>'Tempat lahir harus di isi minimal 3 huruf!!!',
            'pendidikan_terakhir.min'=>'Pendidikan Terakhir harus di isi minimal 3 huruf!!!',
            'status_dalam_keluarga.min'=>'Status Dalam Keluarga harus di isi minimal 3 huruf!!!',
            'golongan_keluarga.min'=>'Golongan Keluarga harus di isi minimal 3 huruf!!!',
            'provinsi.min'=>'Provinsi harus di isi minimal 3 huruf!!!',
            'kabupaten_kota.min'=>'Kabupaten kota harus di isi minimal 3 huruf!!!',
            'rt.min'=>'RT harus di isi minimal 3 huruf!!!',
            'rw.min'=>'RW harus di isi minimal 3 huruf!!!',
            'kelurahan.min'=>'Kelurahan harus di isi minimal 3 huruf!!!',
            'kecamatan.min'=>'Kecamatan harus di isi minimal 3 huruf!!!',
            'agama.min'=>'Agama harus di isi minimal 3 huruf!!!',
            'status_perkawinan.min'=>'Status perkawinan harus di isi minimal 3 huruf!!!',
            'pekerjaan.min'=>'Pekerjaan harus di isi minimal 3 huruf!!!',
            'kewarganegaraan.min'=>'Kewarganegaraan harus di isi minimal 3 huruf!!!',
            'alamat.max'=>'Alamat harus di isi maksimal 255 huruf!!!',
            // 'no_kk.unique'=>'No.KK sudah terdaftar!!!',
            'nik.unique'=>'NIK sudah terdaftar!!!',
            'no_kk.numeric'=>'No,KK harus di isi angka!!!',
            'nik.numeric'=>'NIK harus di isi angka!!!',
            'rw.numeric'=>'RW harus di isi angka!!!',
            'rt.numeric'=>'RT harus di isi angka!!!',
            'kelurahan.max'=>'kelurahan harus di isi maksimal 20 huruf!!!',
            'kecamatan.max'=>'kecamatan harus di isi maksimal 20 huruf!!!',
            'status_perkawinan.max'=>'Status perkawinan harus di isi maksimal 20 huruf!!!',
            'pekerjaan.max'=>'pekerjaan harus di isi maksimal 20 huruf!!!',
            'kewarganegaraan.max'=>'kewarganegaraan harus di isi maksimal 20 huruf!!!',
            'agama.max'=>'agama harus di isi maksimal 20 huruf!!!',
            'tanggal_lahir.date'=>'Tanggal lahir harus di isi tanggal!!!'
        ]);
        
    }
    public function dataPenduduk() {
        return view('admin.data_penduduk');
    }
    public function inputDataPenduduk() {
        $data = Resident::get();
        // dd($data->kartuKeluarga->rt);
        return view('admin.input_penduduk',[
            'data'=>$this->resident
        ]);
    }
    public function store(Request $request) {
        $this->_validation($request);
        // dd($request->all());
        if ($request->tambahkan_kk) {
            $request->validate([
                'no_kk'=>'required|unique:family_registration_cards,no_kk|numeric',
                ],
                [
                    'no_kk.unique'=>'NO.KK Sudah terdaftar!!!',
                    'no_kk.required'=>'No,KK harus di isi!!!',
                    'no_kk.numeric'=>'No,KK harus di isi angka!!!',

            ]);
            
            FamilyRegistrationCard::create([
                'no_kk' => $request->no_kk,
                'kepala_keluarga' => $request->nama,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'kabupaten_kota' => $request->kabupaten_kota,
                'provinsi' => $request->provinsi,
                'golongan_keluarga' => $request->golongan_keluarga,
            ]);
            Resident::create([
                'nik'=>$request->nik,
                'nama'=>$request->nama,
                'tempat_lahir'=>$request->tempat_lahir,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'agama'=>$request->agama,
                'status_perkawinan'=>$request->status_perkawinan,
                'status_dalam_keluarga'=>$request->status_dalam_keluarga,
                'pekerjaan'=>$request->pekerjaan,
                'pendidikan_terakhir'=>$request->pendidikan_terakhir,
                'kewarganegaraan'=>$request->kewarganegaraan,
                'no_kk'=>$request->no_kk
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil disimpan beserta kartu keluarga'
            ], 200);
        }
        // Proses penyimpanan data penduduk
        Resident::create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'agama'=>$request->agama,
            'status_perkawinan'=>$request->status_perkawinan,
            'status_dalam_keluarga'=>$request->status_dalam_keluarga,
            'pekerjaan'=>$request->pekerjaan,
            'pendidikan_terakhir'=>$request->pendidikan_terakhir,
            'kewarganegaraan'=>$request->kewarganegaraan,
            'no_kk'=>$request->no_kk
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil disimpan'
        ], 200);
        
    }
    public function editData() {
        return 1;
    }
    public function getData() {
        $penduduk = Resident::orderBy('nama','asc')->get();
        return DataTables::of($penduduk)
            ->addColumn('rt', function ($row) {
                return $row->kartuKeluarga->rt;
            })
            ->addColumn('rw', function ($row) {
                return $row->kartuKeluarga->rw;
            })
            ->addColumn('golongan_keluarga', function ($row) {
                return $row->kartuKeluarga->golongan_keluarga;
            })
            ->addColumn('no_kk', function ($row) {
                return $row->kartuKeluarga->no_kk;
            })
            ->addColumn('action', function($row){
                return '
                    <a href="'.route('penduduk.edit', $row->id).'" class="btn btn-primary btn-icon btn-sm">
                        <i class="far fa-edit">
                        </i>
                    </a> 
                    <a href="'.route('penduduk.edit', $row->id).'" class="btn btn-danger btn-icon btn-sm">
                        <i class="fas fa-times">
                        </i>
                    </a> 
                    <a href="'.route('penduduk.edit', $row->id).'" class="btn btn-info btn-icon btn-sm">
                        <i class="far fa-user">
                        </i>
                    </a> 
                    ';
                    
            })
            ->make(true);
    }
    
}
