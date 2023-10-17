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
        Schema::create('forums', function (Blueprint $table) {
            $table->id('forum_id');  // Creates an auto-incrementing primary key column named "forum_id"
            $table->string('nama_forum');  // Forum name
            $table->text('chat_kreator')->nullable();  // Chat from the creator
            $table->text('chat_audiens')->nullable();  // Chat from the audience
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forums');
    }
};
