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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->enum('type', ['PROKER WAJIB', 'INTI', 'KOMISI I', 'KOMISI II', 'KOMISI III', 'KOMISI IV', 'KOMISI V', 'AHLI LITBANG', 'AHLI KESTARI', 'AHLI ADMINISTRASI UMUM', 'AHLI INTERNALISASI HUBUNGAN ANTAR ANGGOTA', 'AHLI KOMUNIKASI VISUAL']);
            $table->string('image_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
