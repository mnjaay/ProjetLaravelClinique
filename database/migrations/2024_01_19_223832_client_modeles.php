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
        //
        Schema::create('client_modeles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse');
            $table->integer('age');
            $table->string('genre');

            $table->integer('numero');

             //clé étrangère
             $table->unsignedBigInteger('soin_id');
             $table->foreign('soin_id')
                     ->references('id')->on('SoinsModele');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_modeles');

        //
    }
};
