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
        //
        Schema::create('user', function (Blueprint $table) {
            $table->id(); // Primary key (auto-increment)
            $table->string('email');
            $table->string('pasword');
            $table->string('nama'); // Nama alat

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('user');

    }
};
