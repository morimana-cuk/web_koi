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
            //
            Schema::create('alat', function (Blueprint $table) {
                $table->id('id'); // Primary key (auto-increment)
                $table->float('temperature');
                $table->float('ph');
                $table->float('tds');
                $table->float('do');
                $table->float('amonia');
                $table->integer('id_alat');
                $table->string('label')->nullable();
                $table->timestamps();

            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('alat');

    }
};
