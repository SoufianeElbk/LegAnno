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
        Schema::create('creation_societe_anonyme_sa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('annonce_legale_id');
            // Statuts
            $table->string('nature_acte');
            $table->date('date_acte');
            // Société
            $table->string('denomination');
            $table->string('sigle');
            $table->string('forme_sociale')->default('Société Anonyme');
            $table->string('objet_social');
            $table->decimal('capital',10,2);
            $table->integer('nombre_actions');
            $table->decimal('valeur_nominale',10,2);
            $table->decimal('montant_apports_en_numeraire',10,2);
            $table->string('description_apports');
            $table->integer('duree');
            $table->string('adresse_societe');
            $table->string('code_postal_societe');
            $table->string('ville_societe');
            // Stipulations statutaires
            $table->string('organe_social_habilite');
            $table->string('dispositions_statutaires');
            $table->string('avantages');
            $table->timestamps();
            // Foreign key constraints
            $table->foreign('annonce_legale_id')->references('id')->on('annonces_legales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creation_societe_anonyme_sa');
    }
};
