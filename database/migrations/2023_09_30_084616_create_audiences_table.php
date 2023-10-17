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
        Schema::create('audiences', function (Blueprint $table) {
            $table->id('user_id');  // Creates an auto-incrementing primary key column named "user_id"
            $table->string('user_name');  // User name
            $table->string('password');  // Password (should be hashed in real application)
            $table->string('email')->unique();  // Email (unique)
            $table->string('phone')->nullable();  // Phone number
            $table->string('profile_pict')->nullable();  // Profile picture (image)

            $table->timestamps();  // Adds "created_at" and "updated_at" columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audiences');
    }
};
