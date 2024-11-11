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
        Schema::create('navettes_', function (Blueprint $table) {
            $table->id();
            $table->date('dateDepart');
            $table->string('heureDepart', 50);
            $table->foreignId('id_voiture')->constrained('voitures')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navettes_');
    }
};
