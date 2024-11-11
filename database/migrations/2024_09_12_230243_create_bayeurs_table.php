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
        Schema::create('bayeurs', function (Blueprint $table) {
            $table->id();
            $table->string('PreBay',50 );
            $table->string('NomBay', 50 );
            $table->string ('TelBay', 50 );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bayeurs');
    }
};
