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
        Schema::create('ouvrages', function (Blueprint $table) {
            $table->id();
            $table->string('designation_ouvrage');
            $table->string('unite');
            $table->string('etat')->default("pas encore");
            $table->double('prix');
            $table->double('qte');
            $table->unsignedBigInteger('devi_id');
            $table->foreign('devi_id')->references('id')->on('devis')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ouvrages');
    }
};
