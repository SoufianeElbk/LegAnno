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
        Schema::create('augmentation_capital', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('annonce_legale_id');
            // Décision
            $table->string('organe_decision');
            $table->date('date_decision');
            // Société
            $table->string('denomination');
            $table->string('sigle');
            $table->string('forme_sociale');
            $table->string('adresse_societe');
            $table->string('code_postal_societe');
            $table->string('ville_societe');
            // Nouveau capital
            $table->integer('montant_augmentation_capital_social');
            $table->integer('capital_social_avant_augmentation');
            $table->integer('nouveau_capital_social');
            $table->string('modalite_augmentation_capital');
            $table->string('modalite_liberation_augmentation_capital');
            $table->decimal('liberation');
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
        Schema::dropIfExists('augmentation_capital');
    }
};
