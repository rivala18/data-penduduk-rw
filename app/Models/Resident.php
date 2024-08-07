<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $guarded= [];
    public function kartuKeluarga() {
        return $this->belongsTo(FamilyRegistrationCard::class,'no_kk','no_kk');
    }
}
