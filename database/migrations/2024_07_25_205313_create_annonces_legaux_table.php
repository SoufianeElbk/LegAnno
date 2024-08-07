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
        Schema::create('annonces_legales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('manager_id');
            $table->unsignedBigInteger('journal_id')->nullable();
            $table->string('type_annonce');
            $table->timestamp('date_creation');
            $table->dateTime('date_paiment');
            $table->dateTime('date_validation');
            $table->dateTime('date_publication');
            $table->string('statut');
            $table->string('tribunal');
            $table->date('date_depot');
            $table->string('numero_depot');
            $table->string('numero_rc');
            $table->boolean('paiement')->default(0);
            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('manager_id')->references('id')->on('managers');
            $table->foreign('journal_id')->references('id')->on('journaux');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces_legales');
    }
};
