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
        Schema::create('bus_routs', function (Blueprint $table) {
            $table->id(); // Primary key (auto-incrementing id)
            $table->string('bus_id')->unique(); // Bus ID (unique identifier)
            $table->string('bus_make'); // Bus make (e.g., Volvo, Mercedes)
            $table->time('arrival_time'); // Arrival time (stored as time)
            $table->time('departure_time'); // Departure time (stored as time)
            $table->string('destination'); // Destination (e.g., New York)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_routs');
    }
};
