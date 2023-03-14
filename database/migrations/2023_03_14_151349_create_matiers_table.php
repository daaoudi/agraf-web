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
            $table->double('qte');
            $table->double('prix');
            $table->date('date_r');
            $table->double('nmbr_piece_utiliser');
            $table->unsignedBigInteger('chantier_id');
            $table->unsignedBigInteger('fournisseur_id');
            $table->unsignedBigInteger('unite_id');

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
