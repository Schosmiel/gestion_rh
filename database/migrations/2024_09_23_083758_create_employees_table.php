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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('telephone');
            $table->string('adresse');
            $table->string('ville');
            $table->string('pays');
            $table->string('photo');
            $table->date('date_embauche');
            $table->date('date_fin_contrat');   
            $table->string('poste');
            $table->string('salaire');
            $table->string('statut');
            $table->string('type_contrat'); 
            $table->string('niveau_etude');
            $table->string('sexe');
            $table->string('certification');
            $table->string('langue');
            $table->string('religion');
            $table->string('nationalite');
            $table->unsignedBigInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departements');
            $table->Integer('montant_journalier')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
