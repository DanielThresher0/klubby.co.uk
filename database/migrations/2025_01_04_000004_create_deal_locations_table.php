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
        Schema::create('deal_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('deal_id')->constrained()->onDelete('cascade');
            $table->foreignId('partner_location_id')->constrained('partner_locations')->onDelete('cascade');
            $table->timestamps();
            
            $table->unique(['deal_id', 'partner_location_id']);
            $table->index('deal_id');
            $table->index('partner_location_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deal_locations');
    }
};