<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hasillab;
use Database\Seeders\PasienSeeder;
use Database\Seeders\PetugasLabSeeder;

class ModelHasillab extends Model
{
    protected $table = 'hasil_lab';
    protected $primaryKey = 'hasil_id';

    public function pasien()
    {
        return $this->belongsTo(ModelPasien::class, 'pasien_id');
    }

    public function petugas()
    {
        return $this->belongsTo(ModelPetugas::class, 'petugas_id');
    }
}
