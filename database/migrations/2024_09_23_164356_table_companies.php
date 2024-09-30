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
        Schema::create('registered_companies', function (Blueprint $table) {
            $table->id();
            $table->integer('no');
            $table->string('ruang_lingkup')->nullable();
            $table->string('no_sertifikat')->nullable();
            $table->string('nama_organisasi')->nullable();
            $table->text('alamat')->nullable();
            $table->string('surveilan')->nullable();
            $table->string('akreditasi')->nullable();
            $table->date('masa_berlaku')->nullable();
            $table->string('status')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
