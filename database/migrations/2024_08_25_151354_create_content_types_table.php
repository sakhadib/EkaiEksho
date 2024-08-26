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
        Schema::create('content_types', function (Blueprint $table) {
            $table->id();
            $table->string('TypeName');
            $table->string('TypeDescription')->nullable();
            $table->string('TypeIcon')->nullable();
            $table->string('TypeColor')->nullable();
            $table->string('TypeSlug')->nullable();
            $table->string('TypeStatus')->nullable();
            $table->string('TypeVisibility')->nullable();
            $table->string('TypeOrder')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_types');
    }
};
