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
        Schema::create('activity_galeries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('extracurricular_id');
            $table->string('image_url');
            $table->string('image_alt');
            $table->timestamps();

            $table->foreign('extracurricular_id')->references('id')->on('extracurriculars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_galeries');
    }
};
