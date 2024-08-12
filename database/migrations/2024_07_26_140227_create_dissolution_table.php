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
        Schema::create('dissolution', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('annonce_legale_id');
            // La décision
            $table->string('organe_decision');
            $table->date('date_decision');
            // Société
            $table->string('denomination');
            $table->string('sigle');
            $table->string('forme_sociale');
            $table->decimal('capital',10,2);
            $table->string('adresse_societe');
            $table->string('code_postal_societe');
            $table->string('ville_societe');
            // Le liquidateur
            $table->enum('civilite_liquidateur',['Monsieur', 'Madame']);
            $table->string('nom_liquidateur');
            $table->string('adresse_liquidateur');
            $table->string('code_postal_liquidateur');
            $table->string('ville_liquidateur');
            $table->string('raison_liquidation');
            $table->string('limitation_apportes_aux_pouvoir_du_liquidateur');
            $table->string('adresse_liquidation');
            $table->string('code_postal_liquidation');
            $table->string('ville_liquidation');

            $table->timestamps();
            // Foreign keys constraints
            $table->foreign('annonce_legale_id')->references('id')->on('annonces_legales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dissolution');
    }
};
