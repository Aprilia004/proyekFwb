<?php

namespace App\Models;

use Database\Seeders\HasillabSeeder;
use Illuminate\Database\Eloquent\Model;

class ModelPetugas extends Model
{
    protected $table = 'petugas_laboratorium';
    protected $primaryKey = 'petugas_id';

    public function hasilLab()
    {
        return $this->hasMany(ModelHasillab::class, 'petugas_id');
    }
}
