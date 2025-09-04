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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact_name');
            $table->string('phone');
            $table->string('website')->nullable();
            $table->text('description')->nullable();
            $table->string('logo')->nullable();
            $table->enum('category', ['retail', 'food_drink', 'services', 'entertainment', 'health_beauty', 'travel', 'other']);
            $table->enum('status', ['pending', 'approved', 'rejected', 'suspended'])->default('pending');
            $table->timestamp('approved_at')->nullable();
            $table->string('stripe_customer_id')->nullable();
            $table->string('subscription_status')->nullable();
            $table->timestamp('subscription_ends_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};