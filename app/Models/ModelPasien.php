<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Dokter;
use Database\Seeders\DokterSeeder;
use Database\Seeders\HasillabSeeder;
use Database\Seeders\penulisSeeder;

class ModelPasien extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'pasien_id';

    public function dokter()
    {
        return $this->belongsToMany(Modeldokter::class, 'dokter_pasien', 'pasien_id', 'dokter_id');
    }

    public function hasilLab()
    {
        return $this->hasMany(ModelHasillab::class, 'pasien_id');
    }
}
