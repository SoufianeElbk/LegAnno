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
        Schema::create('associes', function (Blueprint $table) {
            $table->id();
            $table->enum('type_associe',['Personne physique', 'Personne morale']);
            $table->enum('civilite_associe',['Monsieur', 'Madame'])->nullable();
            $table->string('nom_associe');
            $table->string('rc_associe')->nullable();
            $table->string('adresse_associe');
            $table->string('code_postal_associe');
            $table->string('ville_associe');
            $table->decimal('participation_associe')->nullable();
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
        Schema::dropIfExists('associes');
    }
};
