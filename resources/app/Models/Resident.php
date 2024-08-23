<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $guarded= [];
    // protected $dates = ['tanggal_lahir'];
    public function kartuKeluarga() {
        return $this->belongsTo(FamilyRegistrationCard::class,'no_kk','no_kk');
    }

    public function getAgeAttribute(){
        return Carbon::parse($this->tanggal_lahir)->age;
    }
}
