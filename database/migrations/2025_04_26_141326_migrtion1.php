<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('Admin', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamps();
        });

        Schema::create('Dokter', function (Blueprint $table) {
            $table->id('dokter_id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('spesialisasi')->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->text('bio')->nullable();
            $table->timestamps();
        });

        Schema::create('Pasien', function (Blueprint $table) {
            $table->id('pasien_id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('nama');
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['male', 'female']);
            $table->string('no_hp', 20)->nullable();
            $table->text('alamat')->nullable();
            $table->timestamps();
        });

        Schema::create('Petugas_laboratorium', function (Blueprint $table) {
            $table->id('petugas_id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('no_hp', 20)->nullable();
            $table->timestamps();
        });

        Schema::create('Penulis', function (Blueprint $table) {
            $table->id('penulis_id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('nama');
            $table->text('bio')->nullable();
            $table->timestamps();
        });

        Schema::create('Hasil_lab', function (Blueprint $table) {
            $table->id('hasil_id');
            $table->unsignedBigInteger('pasien_id');
            $table->unsignedBigInteger('petugas_id');
            $table->string('nama_pemeriksaan');
            $table->string('hasil');
            $table->date('tanggal_pemeriksaan');
            $table->timestamps();

        });

        
        
    }

    public function down(): void
    {
        Schema::dropIfExists('Admin');
        Schema::dropIfExists('Dokter');
        Schema::dropIfExists('Pasien');
        Schema::dropIfExists('Petugas_aboratorium');
        Schema::dropIfExists('Penulis');
        Schema::dropIfExists('Hasil_lab');

    }
};
