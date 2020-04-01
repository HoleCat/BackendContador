<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMayorventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mayorventas', function (Blueprint $table) {
            $table->id();
            $table->string('Numerocor')->nullable();
            $table->string('Fechadee')->nullable();
            $table->string('FechadeV')->nullable();
            $table->string('TipodeCo')->nullable();
            $table->string('NroDeSe')->nullable();
            $table->string('Numerode')->nullable();
            $table->string('TipodeDo')->nullable();
            $table->string('NroDoc')->nullable();
            $table->string('ApellidosyNombresDenomoRazonS')->nullable();
            $table->string('ValorFact')->nullable();
            $table->string('Baseimpon')->nullable();
            $table->string('Descuento1')->nullable();
            $table->string('IGVYOIP')->nullable();
            $table->string('Descuento2')->nullable();
            $table->string('Importede1')->nullable();
            $table->string('Importede2')->nullable();
            $table->string('ISC')->nullable();
            $table->string('Otros')->nullable();
            $table->string('Total')->nullable();
            $table->string('ImptoML')->nullable();
            $table->string('FechadeR')->nullable();
            $table->string('Tipopara')->nullable();
            $table->string('Seriedel')->nullable();
            $table->string('NroDelc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mayorventas');
    }
}
