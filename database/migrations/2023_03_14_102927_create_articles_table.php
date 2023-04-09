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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('article_unite');
            $table->text('description');
            $table->string('per_de_travail');
            $table->unsignedBigInteger('ouvrier_id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('chantier_id');
            $table->foreign('ouvrier_id')->references('id')->on('ouvriers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('chantier_id')->references('id')->on('chantiers')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
