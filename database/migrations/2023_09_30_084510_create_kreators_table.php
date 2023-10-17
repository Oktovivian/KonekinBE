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
        Schema::create('kreators', function (Blueprint $table) {

            $table->id();  // Creates an auto-incrementing primary key column named "id"
            $table->string('kreatorID')->unique();  // Unique identifier for kreators
            $table->unsignedBigInteger('UserID');  // Foreign key column
            $table->timestamps();  // Adds "created_at" and "updated_at" columns

            // Define foreign key constraint
            $table->foreign('UserID')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kreators');
    }
};
