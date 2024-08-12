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
        Schema::create('creation_sarl_sarlau_snc_scs_sca', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('annonce_legale_id')->nullable();
            // Statuts
            $table->string('nature_acte');
            $table->date('date_acte');
            // Société
            $table->string('denomination');
            $table->string('sigle');
            $table->string('forme_sociale');
            $table->string('objet_social');
            $table->decimal('capital',10,2);
            $table->decimal('valeur_nominale',10,2);
            $table->decimal('montant_apports_en_numeraire',10,2);
            $table->string('description_apports');
            $table->integer('duree');
            $table->string('adresse_societe');
            $table->string('code_postal_societe');
            $table->string('ville_societe');
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
        Schema::dropIfExists('creation_sarl_sarlau_snc_scs_sca');
    }
};
