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
        Schema::create('deal_claims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('deal_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('partner_location_id')->nullable()->constrained('partner_locations')->onDelete('set null');
            $table->string('claim_code')->unique();
            $table->timestamp('claimed_at');
            $table->timestamp('redeemed_at')->nullable();
            $table->enum('status', ['claimed', 'redeemed', 'expired'])->default('claimed');
            $table->decimal('savings_amount', 10, 2)->nullable();
            $table->timestamps();
            
            $table->index(['user_id', 'deal_id']);
            $table->index('claim_code');
            $table->index('status');
            $table->index('claimed_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deal_claims');
    }
};