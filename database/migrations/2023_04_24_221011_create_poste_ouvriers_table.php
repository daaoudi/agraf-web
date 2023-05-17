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
        Schema::create('poste_ouvriers', function (Blueprint $table) {
            $table->id();
            $table->double("salaire");
            $table->date("date_debut");
            $table->date("date_fin");
            $table->string("poste_ouvrier");
            $table->string("type");
            $table->unsignedBigInteger('ouvrier_id');
            $table->foreign('ouvrier_id')->references('id')->on('ouvriers')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('devi_id');
            $table->foreign('devi_id')->references('id')->on('devis')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('ouvrage_id');
            $table->foreign('ouvrage_id')->references('id')->on('ouvrages')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poste_ouvriers');
    }
};
