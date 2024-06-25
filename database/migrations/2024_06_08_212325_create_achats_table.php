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
        Schema::create('achats', function (Blueprint $table) {
            $table->id();
            $table->date('date_achat');
            $table->integer('montant');
            $table->string('etat');
            $table->integer('id_employers');
            $table->integer('id_fournisseurs');
            $table->foreign('id_employers')->references('id')->on('employers');
            $table->foreign('id_fournisseurs')->references('id')->on('fournisseurs');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achats');
    }
};