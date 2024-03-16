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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 20);
            $table->string('Stazione_di_partenza', 40);
            $table->string('Stazione_di_arrivo', 40);
            $table->string('Orario_di_partenza', 5);
            $table->string('Orario_di_arrivo', 5);
            $table->smallInteger('Codice_Treno')->unsigned();
            $table->tinyInteger('Numero_Carrozze')->unsigned();
            $table->boolean('In_orario')->default(1);
            $table->boolean('Cancellato')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
