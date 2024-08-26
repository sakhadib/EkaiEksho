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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('content_type_id');
            $table->string('ContentTitle');
            $table->text('ContentDescription')->nullable();
            $table->string('Content_link');
            $table->boolean('isApproved')->default(true);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('FieldID');
            $table->timestamps();

            $table->foreign('content_type_id')->references('id')->on('content_types')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('contributors')->onDelete('cascade');
            $table->foreign('FieldID')->references('id')->on('content_fields')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
