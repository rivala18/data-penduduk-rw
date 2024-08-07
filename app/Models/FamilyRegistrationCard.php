<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyRegistrationCard extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function resident() {
        return $this->belongsTo(Resident::class,'no_kk','no_kk');
    }
}
