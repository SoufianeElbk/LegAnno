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
            $table->string('type_annonce')->nullable();
            $table->timestamp('date_creation')->nullable();
            $table->dateTime('date_paiment')->nullable();
            $table->dateTime('date_validation')->nullable();
            $table->string('statut');
            $table->string('tribunal')->nullable();
            $table->date('date_depot')->nullable();
            $table->string('numero_depot')->nullable();
            $table->string('numero_rc')->nullable();
            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('manager_id')->references('id')->on('managers');
            $table->timestamps();

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
