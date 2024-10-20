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
        Schema::create('jenis__bukus', function (Blueprint $table) {
            $table->id('id'); // kolom id
            $table->string('jenis_buku'); // kolom jenis buku
            $table->timestamps(); // kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis__bukus');
    }
};
