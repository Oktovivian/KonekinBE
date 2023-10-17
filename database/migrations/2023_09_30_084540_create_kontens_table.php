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
        Schema::create('kontens', function (Blueprint $table) {
            $table->id('konten_id');  // Creates an auto-incrementing primary key column named "konten_id"
            $table->string('nama_konten');  // Content name
            $table->text('deskripsi')->nullable();  // Description
            $table->date('tanggal_publish')->nullable();  // Publishing date
            $table->unsignedBigInteger('kreator_id');  // Foreign key column for the creator
            $table->foreign('kreator_id')->references('id')->on('kreators');  // Define foreign key constraint
            $table->string('video_url')->nullable();  // Video URL
            $table->decimal('harga', 10, 2)->nullable();  // Price in decimal format

            $table->timestamps();  // Adds "created_at" and "updated_at" columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontens');
    }
};
