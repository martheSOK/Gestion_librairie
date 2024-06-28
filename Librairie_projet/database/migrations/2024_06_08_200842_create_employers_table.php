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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('statut');
            $table->integer('id_users');
            $table->foreign('id_users')->references('id')->on('users');
=======
            $table->enum('statut',['vendeur','gerant','magasinier']);
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
>>>>>>> 982bc25 (controller employer,achat)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
