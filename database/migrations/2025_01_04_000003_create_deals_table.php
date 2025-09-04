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
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partner_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->enum('discount_type', ['percentage', 'fixed', 'bogo', 'other']);
            $table->decimal('discount_value', 10, 2)->nullable();
            $table->string('discount_text')->nullable(); // For custom discount descriptions
            $table->text('terms_conditions')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->enum('availability', ['all_locations', 'specific_locations'])->default('all_locations');
            $table->integer('usage_limit')->nullable(); // Max uses per user
            $table->integer('total_limit')->nullable(); // Total uses across all users
            $table->integer('total_claims')->default(0);
            $table->string('promo_code')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            
            $table->index(['is_active', 'is_featured']);
            $table->index(['start_date', 'end_date']);
            $table->index('partner_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deals');
    }
};