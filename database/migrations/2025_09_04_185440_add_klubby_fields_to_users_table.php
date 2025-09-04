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
        Schema::table('users', function (Blueprint $table) {
            // Contact information
            $table->string('phone')->nullable()->after('email');
            
            // Referral system
            $table->string('referral_code', 10)->unique()->nullable()->after('phone');
            $table->string('referred_by', 10)->nullable()->after('referral_code');
            
            // Draw system
            $table->integer('draw_entries')->default(0)->after('referred_by');
            $table->integer('bonus_entries')->default(0)->after('draw_entries');
            
            // User preferences
            $table->json('preferences')->nullable();
            
            // Indexes for performance
            $table->index('referral_code');
            $table->index('referred_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'phone',
                'referral_code',
                'referred_by',
                'draw_entries',
                'bonus_entries',
                'preferences'
            ]);
        });
    }
};
