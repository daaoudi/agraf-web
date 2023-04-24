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
        Schema::create('matiers', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('designation');
            $table->string('matiere_unite');
            $table->double('qte');
            $table->double('prix');
            $table->dateTime('date_r');
            $table->double('nmbr_piece_utiliser');
            $table->unsignedBigInteger('chantier_id');
            $table->unsignedBigInteger('article_id');
            $table->foreign('chantier_id')->references('id')->on('chantiers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fournisseur_id')->references('id')->on('fournisseurs')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('fournisseur_id');
           

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matiers');
    }
};
