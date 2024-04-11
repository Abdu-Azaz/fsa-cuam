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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('prenom', 60);
            $table->string('nom', 60);
            $table->string('cne', 11);
            $table->string('cin', 10);
            $table->string('apogee', 10)->nullable();
            $table->string('filiere', 40);
            $table->date('date_naissance', 40);
            $table->string('annee', 4);
            $table->boolean('actif')->default(false);
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
