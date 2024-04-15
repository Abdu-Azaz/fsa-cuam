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
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('major_id')->index();
            $table->foreign('major_id')->references('id')->on('majors');
            $table->string('semester', 3);
            $table->string('session', 10);
            $table->json("timetables")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('timetable_files');
        Schema::dropIfExists('timetables');
    }
};
