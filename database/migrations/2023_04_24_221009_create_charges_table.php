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
        Schema::create('charges', function (Blueprint $table) {
            $table->id();
            $table->double('mod');
            $table->double('mp');
            $table->double('montant_charges_matier');
            $table->double('montant_credit')->default(0);
            $table->string('mode_paiement');

            $table->unsignedBigInteger('devi_id');
            $table->foreign('devi_id')->references('id')->on('devis')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('matier_id');
            $table->foreign('matier_id')->references('id')->on('matiers')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('fournisseur_id');
            $table->foreign('fournisseur_id')->references('id')->on('fournisseurs')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charges');
    }
};
