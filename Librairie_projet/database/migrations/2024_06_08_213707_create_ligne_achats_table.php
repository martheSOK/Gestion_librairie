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
        Schema::create('ligne_achats', function (Blueprint $table) {
            $table->id();
            $table->string('prix_unit_achat');
            $table->integer('quantite');
            $table->integer('montant_ligneachat');
            $table->enum('etat',['en cours','terminé']);
            $table->integer('achat_id');
            $table->integer('livres_id');
            $table->foreign('achat_id')->references('id')->on('achats');
            $table->foreign('livres_id')->references('id')->on('livres');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligne_achats');
    }
};
