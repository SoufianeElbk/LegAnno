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
        Schema::create('membres_organe_administration', function (Blueprint $table) {
            $table->id();
            $table->enum('type_membre',['Personne physique', 'Personne morale']);
            $table->string('qualite_membre');
            $table->enum('civilite_membre',['Monsieur', 'Madame'])->nullable();
            $table->string('nom_membre');
            $table->string('adresse_membre');
            $table->string('code postal_membre');
            $table->string('ville_membre');
            $table->unsignedBigInteger('annonce_legale_id');
            $table->foreign('annonce_legale_id')->references('id')->on('annonces_legales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membres_organe_administration');
    }
};
