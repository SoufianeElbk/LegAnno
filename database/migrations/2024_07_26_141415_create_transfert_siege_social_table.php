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
        Schema::create('transfert_siege_social', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('annonce_legale_id');
            // Décision
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
            // Nouvelle adresse du siège social
            $table->string('nv_adresse');
            $table->string('nv_code_postale');
            $table->string('nv_ville');
            // Foreign keys constraints
            $table->foreign('annonce_legale_id')->references('id')->on('annonces_legales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfert_siege_social');
    }
};
