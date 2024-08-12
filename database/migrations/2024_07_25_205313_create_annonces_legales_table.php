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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->unsignedBigInteger('journal_id')->nullable();
            $table->string('type_annonce');
            $table->integer('num_type');
            $table->timestamp('date_creation');
            $table->dateTime('date_paiment')->nullable();
            $table->dateTime('date_validation')->nullable();
            $table->dateTime('date_publication')->nullable();
            $table->string('statut')->default('en préparation');
            $table->string('tribunal');
            $table->date('date_depot');
            $table->string('numero_depot');
            $table->string('numero_rc');
            $table->boolean('paiement')->default(0);
            $table->timestamps();
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
