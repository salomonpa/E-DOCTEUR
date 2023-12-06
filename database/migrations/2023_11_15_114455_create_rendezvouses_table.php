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
        Schema::create('rendezvouses', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->string('adresse');
            $table->string('sexe');
            $table->integer('telephone');
            $table->time('heure_rdv');
            $table->date('date_rdv');
            $table->string('statut');
            $table->foreign('docteurs_id')->references('id')->on('docteurs')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('docteurs_id')->unsigned();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendezvouses');
    }
};
