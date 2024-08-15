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
        Schema::create('representants_legaux', function (Blueprint $table) {
            $table->id();
            $table->string('qualite_representant');
            $table->enum('civilite_representant',['Monsieur', 'Madame']);
            $table->string('nom_representant');
            $table->string('adresse_representant');
            $table->string('code_postal_representant');
            $table->string('ville_representant');
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
        Schema::dropIfExists('representants_legaux');
    }
};
