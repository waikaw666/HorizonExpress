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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(\App\Models\Bus::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Origin::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Destination::class)->constrained()->cascadeOnDelete();
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->date('date');
            $table->string('duration')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
