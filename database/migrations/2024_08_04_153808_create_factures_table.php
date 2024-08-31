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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('annonce_legale_id');
            $table->timestamp('date_commande');
            $table->string('mode_paiement');
            $table->string('adresse_facturation');
            $table->integer('montant')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('annonce_legale_id')->references('id')->on('annonces_legales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
