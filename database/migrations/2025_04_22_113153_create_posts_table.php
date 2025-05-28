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
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->json('title');
            $table->json('content');
            $table->string('cover_image')->nullable();
            $table->json('tags')->nullable();
            $table->integer('views')->default(0);
            $table->integer('estimated_reading_time')->nullable();
            $table->string('address')->nullable();
            $table->integer('price')->nullable();
            $table->date('event_day')->nullable();
            $table->enum('type', ['rapport', 'post', 'event'])->default('post');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
