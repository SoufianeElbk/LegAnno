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
        Schema::create('creation_societe_anonyme_simplifiee_sas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('annonce_legale_id');
            // Statuts
            $table->string('nature_acte');
            $table->date('date_acte');
            // Société
            $table->string('denomination');
            $table->string('sigle');
            $table->string('forme_sociale')->default('Société Anonyme Simplifiée (SAS)');
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
            $table->unsignedBigInteger('represantant_id');
            $table->unsignedBigInteger('membre_organe_administration_id');
            $table->unsignedBigInteger('commissaire_aux_comptes_id');
            // Foreign key constraints
            $table->foreign('represantant_id')->references('id')->on('represantants');
            $table->foreign('membre_organe_administration_id')->references('id')->on('membres_organe_administration');
            $table->foreign('commissaire_aux_comptes_id')->references('id')->on('commissaires_aux_comptes');
            $table->foreign('annonce_legale_id', 'sas_annonces_legales_fk')->references('id')->on('annonces_legales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creation_societe_anonyme_simplifiee_sas');
    }
};
