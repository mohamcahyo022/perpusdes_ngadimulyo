<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // kolom id
            $table->string('username')->unique(); // kolom username
            $table->string('nama_lengkap'); // kolom nama lengkap
            $table->string('email')->unique(); // kolom email
            $table->string('nomor_wa')->nullable(); // kolom nomor WA, boleh kosong
            $table->string('password'); // kolom password
            $table->string('role')->default('user'); // kolom role, default ke 'user'
            $table->timestamps(); // kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
