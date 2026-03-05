<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('subcategory_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('content');
            $table->string('thumbnail')->nullable();
            $table->json('images')->nullable(); 
            $table->string('video_url')->nullable();
            $table->string('tags')->nullable();
            $table->boolean('is_trending')->default(false);
            $table->boolean('is_popular')->default(0);
            $table->boolean('is_premium')->default(0);
            $table->boolean('is_latest')->default(false);
            $table->enum('status', ['draft', 'published'])->default('published');
            $table->boolean('is_live')->default(false);
            $table->timestamps();
        });
    }
    public function down(): void{
        Schema::dropIfExists('posts');
    }
};
