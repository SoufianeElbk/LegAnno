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
        Schema::create('commissaires_aux_comptes', function (Blueprint $table) {
            $table->id();
            $table->enum('civilite_commissaire',['Monsieur', 'Madame']);
            $table->string('nom_commissaire');
            $table->string('adresse_commissaire');
            $table->string('code_postal_commissaire');
            $table->string('ville_commissaire');
            $table->unsignedBigInteger('annonce_legale_id');
            $table->timestamps();
            $table->foreign('annonce_legale_id')->references('id')->on('annonces_legales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commissaires_aux_comptes');
    }
};
