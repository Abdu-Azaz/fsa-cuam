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
        Schema::create('announces', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->longText('body');
            $table->string('announce_type');
            $table->enum('status', ['published', 'draft'])->default('published');
            $table->string('isFeatured')->default(false);
            $table->string('meta_keywords');
            $table->boolean("make_first")->default(true); //WHen true, on update announce will become first
            $table->timestamps();
            $table->unsignedMediumInteger('views_count')->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announces');
    }
};
