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
            $table->double('montant_credit')->default(0);
            $table->double('prix');
            $table->double('qte');
            $table->string('mode_paiement');
            $table->string('designation');
            $table->string('unite');
            $table->date('date');

            $table->unsignedBigInteger('devi_id');
            $table->foreign('devi_id')->references('id')->on('devis')->onDelete('cascade')->onUpdate('cascade');
           
            $table->unsignedBigInteger('ouvrage_id');
            $table->foreign('ouvrage_id')->references('id')->on('ouvrages')->onDelete('cascade')->onUpdate('cascade');

            
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
