<?php

namespace App\Models;
use App\Models\Pasien;
use Database\Seeders\PasienSeeder;
use Illuminate\Database\Eloquent\Model;
class Modeldokter extends Model
{
    protected $table = 'dokter';
    protected $primaryKey = 'dokter_id';

    public function pasien()
    {
        return $this->belongsToMany(ModelPasien::class, 'dokter_pasien', 'dokter_id', 'pasien_id');
    }
}
