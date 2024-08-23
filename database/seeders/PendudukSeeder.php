<?php

namespace Database\Seeders;

use App\Models\FamilyRegistrationCard;
use App\Models\Resident;
use Illuminate\Database\Seeder;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resident::create([
            'nik'=>'320123',
            'nama'=>'Rival',
            'alamat' => 'CIKOPO',
            'tempat_lahir'=>'BANDUNG',
            'tanggal_lahir'=>'2001-12-18',
            'jenis_kelamin'=>'Laki-laki',
            'agama'=>'Islam',
            'status_perkawinan'=>'menikah',
            'status_dalam_keluarga'=>'Kepala Keluarga',
            'pekerjaan'=>'OJEG',
            'pendidikan_terakhir'=>'Smk',
            'kewarganegaraan'=>'Indonesia',
            'no_kk'=>'320425',
            'no_hp'=>''
        ]);
        Resident::create([
            'nik'=>'320124',
            'nama'=>'Aftaha',
            'alamat' => 'CIKOPO',
            'tempat_lahir'=>'BANDUNG',
            'tanggal_lahir'=>'2001-12-18',
            'jenis_kelamin'=>'Laki-laki',
            'agama'=>'Islam',
            'status_perkawinan'=>'menikah',
            'status_dalam_keluarga'=>'Anak',
            'pekerjaan'=>'OJEG',
            'pendidikan_terakhir'=>'Smk',
            'kewarganegaraan'=>'Indonesia',
            'no_kk'=>'320425',
            'no_hp'=>''
        ]);
        Resident::create([
            'nik'=>'320126',
            'nama'=>'Fadilah',
            'alamat' => 'CIKOPO',
            'tempat_lahir'=>'BANDUNG',
            'tanggal_lahir'=>'2001-12-18',
            'jenis_kelamin'=>'Laki-laki',
            'agama'=>'Islam',
            'status_perkawinan'=>'menikah',
            'status_dalam_keluarga'=>'Anak',
            'pekerjaan'=>'OJEG',
            'pendidikan_terakhir'=>'Smk',
            'kewarganegaraan'=>'Indonesia',
            'no_kk'=>'320425',
            'no_hp'=>''
        ]);
        Resident::create([
            'nik'=>'320128',
            'nama'=>'Fadilah',
            'alamat' => 'CIKOPO',
            'tempat_lahir'=>'BANDUNG',
            'tanggal_lahir'=>'2001-12-18',
            'jenis_kelamin'=>'Laki-laki',
            'agama'=>'Islam',
            'status_perkawinan'=>'menikah',
            'status_dalam_keluarga'=>'Anak',
            'pekerjaan'=>'OJEG',
            'pendidikan_terakhir'=>'Smk',
            'kewarganegaraan'=>'Indonesia',
            'no_kk'=>'320425',
            'no_hp'=>''
        ]);
        Resident::create([
            'nik'=>'320127',
            'nama'=>'Ahsanu',
            'alamat' => 'CIKOPO',
            'tempat_lahir'=>'BANDUNG',
            'tanggal_lahir'=>'2001-12-18',
            'jenis_kelamin'=>'Laki-laki',
            'agama'=>'Islam',
            'status_perkawinan'=>'menikah',
            'status_dalam_keluarga'=>'Kepala Keluarga',
            'pekerjaan'=>'OJEG',
            'pendidikan_terakhir'=>'Smk',
            'kewarganegaraan'=>'Indonesia',
            'no_kk'=>'320426',
            'no_hp'=>''
        ]);
        Resident::create([
            'nik'=>'320128',
            'nama'=>'Rusdu',
            'alamat' => 'CIKOPO',
            'tempat_lahir'=>'BANDUNG',
            'tanggal_lahir'=>'2001-12-18',
            'jenis_kelamin'=>'Laki-laki',
            'agama'=>'Islam',
            'status_perkawinan'=>'menikah',
            'status_dalam_keluarga'=>'Ayah',
            'pekerjaan'=>'OJEG',
            'pendidikan_terakhir'=>'Smk',
            'kewarganegaraan'=>'Indonesia',
            'no_kk'=>'320426',
            'no_hp'=>''
        ]);

        FamilyRegistrationCard::create([
            'no_kk' => '320425',
            'kepala_keluarga' => 'Rival',
            'rt' => 1,
            'rw' => 2,
            'kelurahan' => 'Babakan Peuteuy',
            'kecamatan' => 'Cicalengka',
            'kabupaten_kota' => 'Bandung',
            'provinsi' => 'Jawa Barat',
            'golongan_keluarga' => 'Mampu',
        ]);
        FamilyRegistrationCard::create([
            'no_kk' => '320426',
            'kepala_keluarga' => 'Ahsanu',
            'rt' => 1,
            'rw' => 2,
            'kelurahan' => 'Babakan Peuteuy',
            'kecamatan' => 'Cicalengka',
            'kabupaten_kota' => 'Bandung',
            'provinsi' => 'Jawa Barat',
            'golongan_keluarga' => 'Mampu',
        ]);
    }
}
