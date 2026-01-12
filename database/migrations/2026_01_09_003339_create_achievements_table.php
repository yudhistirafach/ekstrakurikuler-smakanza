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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('extracurricular_id')->constrained()->onDelete('no action');
            $table->foreignId('coach_id')->constrained()->onDelete('no action');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('excerpt', 255)->nullable();
            $table->text('description')->nullable();
            $table->enum('level', ['sekolah', 'kabupaten', 'kota', 'provinsi', 'nasional', 'internasional'])->nullable();
            $table->integer('year')->nullable();
            $table->string('rank')->nullable();
            $table->enum('winner_type', ['individu', 'group']);
            $table->string('group_name')->nullable();
            $table->enum('medal', ['emas', 'perak', 'perunggu'])->nullable();
            $table->date('event_date')->nullable();
            $table->boolean('is_published')->default(false);
            $table->string('image_url')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
