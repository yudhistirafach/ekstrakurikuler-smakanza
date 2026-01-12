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
        Schema::create('extracurriculars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('no action');
            $table->foreignId('coach_id')->constrained()->onDelete('no action');
            $table->string('name', 100);
            $table->string('slug')->unique();
            $table->string('excerpt', 255)->nullable();
            $table->text('description')->nullable();
            $table->integer('quota')->default(0);
            $table->enum('day', ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'])->nullable();
            $table->boolean('is_mandatory')->default(false);
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('location', 100)->nullable();
            $table->string('image_url')->nullable();
            $table->string('banner_url')->nullable();
            $table->text('requirements')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extracurriculars');
    }
};
