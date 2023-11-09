<?php

use App\Models\Mascota;
use App\Models\Vacuna;
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
        Schema::create('control_vacunas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Mascota::class)->constrained();
            $table->foreignIdFor(Vacuna::class)->constrained();
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('control_vacunas');
    }
};
