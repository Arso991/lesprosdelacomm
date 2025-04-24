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
        Schema::create('careers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->json('title');
            $table->json('type');
            $table->json('description');
            $table->json('image')->nullable();
            $table->string('department');
            $table->string('city');
            $table->string('address');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('graduation')->nullable();
            $table->date('closing_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
