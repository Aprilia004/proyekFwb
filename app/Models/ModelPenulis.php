<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\penulis;
use Database\Seeders\penulisSeeder;

class ModelPenulis extends Model
{
    protected $table = 'penulis_konten';
    protected $primaryKey = 'penulis_id';

    public function artikel()
    {
        return $this->hasMany(ModelPenulis::class, 'penulis_id');
    }
}
