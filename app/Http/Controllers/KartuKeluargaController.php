<?php

namespace App\Http\Controllers;

use App\Models\FamilyRegistrationCard;
use App\Models\Resident;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

class KartuKeluargaController extends Controller
{
    protected $kartu_keluarga;

    public function __construct()
    {
        $this->kartu_keluarga = FamilyRegistrationCard::get();
    }
    public function _validation($request) {
        $request->validate([        //validasi input
            'kepala_keluarga'=>'required|min:1',
            'no_kk'=>'required|numeric',
            // 'no_kk'=>'required|unique:family_registration_cards,no_kk|numeric',
            'kabupaten_kota'=>'required|min:3',
            'provinsi'=>'required|min:3',
            'golongan_keluarga'=>'required|min:3',
            'rt'=>'required|numeric|min:1',
            'rw'=>'required|numeric|min:1',
            'kelurahan'=>'required|min:3|max:20',
            'kecamatan'=>'required|min:3|max:20',
            'golongan_keluarga'=>'required|min:3',
            // 'no_hp'=>'numeric'
        ],[
            'kepala_keluarga.required'=>'Nama harus di isi!!!',
            'no_kk.required'=>'No,KK harus di isi angka!!!',
            'kabupaten_kota.required'=>'Kabupaten/Kota harus di isi!!!',
            'provinsi.required'=>'Provinsi harus di isi!!!',
            'golongan_keluarga.required'=>'Golongan Keluarga harus di isi!!!',
            'rt.required'=>'RT harus di isi angka!!!',
            'rw.required'=>'RW harus di isi angka!!!',
            'kelurahan.required'=>'Kelurahan harus di isi!!!',
            'kecamatan.required'=>'Kecamatan harus di isi!!!',
            'golongan_keluarga.min'=>'Golongan Keluarga harus di isi minimal 3 huruf!!!',
            'provinsi.min'=>'Provinsi harus di isi minimal 3 huruf!!!',
            'kabupaten_kota.min'=>'Kabupaten kota harus di isi minimal 3 huruf!!!',
            'rt.min'=>'RT harus di isi minimal 3 huruf!!!',
            'rw.min'=>'RW harus di isi minimal 3 huruf!!!',
            'kelurahan.min'=>'Kelurahan harus di isi minimal 3 huruf!!!',
            'kecamatan.min'=>'Kecamatan harus di isi minimal 3 huruf!!!',
            'no_kk.numeric'=>'No,KK harus di isi angka!!!',
            'nik.numeric'=>'NIK harus di isi angka!!!',
            'rw.numeric'=>'RW harus di isi angka!!!',
            'rt.numeric'=>'RT harus di isi angka!!!',
            'kelurahan.max'=>'kelurahan harus di isi maksimal 20 huruf!!!',
            'kecamatan.max'=>'kecamatan harus di isi maksimal 20 huruf!!!',
            // 'no_hp.numeric'=>'No.Hp harus di isi dengan angka'
        ]);        
    }  

    public function index() {
        return view('admin.data_kk');
    }
    public function test() {
        return view('admin.test',);
    }

    public function getDataNik(Request $request) {
        $search = $request->term;
        $data = Resident::where('nik','like','%'.$search.'%')->get();
        $response = [];

        foreach ($data as $item) {
            $response[] = [
                'label'=>'Nama :'.$item->nama.' | NIK:'.$item->nik,
                'value'=>$item->nama,
                'nik'=>$item->nik
            ];
        }
        return response()->json($response);
    }

    public function getData() {
        $data = FamilyRegistrationCard::get();

        return DataTables::of($data)
                ->addColumn('action', function($row){
                    return '
                        <a href="'.route('edit.kk', $row->id).'" class="btn btn-primary btn-icon btn-sm">
                            <i class="far fa-edit">
                            </i>
                        </a> 
                        <a href="#table-1" class="btn btn-danger btn-icon btn-sm hapusPenduduk" data-id="'.$row->id.'">
                            <i class="fas fa-trash">
                            </i>
                        </a> 
                        <a href="'.route('penduduk.edit', $row->id).'" class="btn btn-info btn-icon btn-sm">
                            <i class="far fa-user">
                            </i>
                        </a> 
                        ';
                        
                })
                ->make('true');
    }

    public function edit($id) {
        // return $id;
        $data = $this->kartu_keluarga->find($id);
        return view('admin.edit_kk',['data'=>$data]);
    }

    public function updateDataKk(Request $request) {
        return $request->all();
    }
    
    public function store(Request $request) {
        
    }

}
