<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulo1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Periodo');
            $table->string('NumeroCorrelativo');
            $table->string('Correlativo');
            $table->string('Fechadee');
            $table->string('FechadeV');
            $table->string('TipodeCo');
            $table->string('SerieoCo');
            $table->string('AnodeDua');
            $table->string('Numerode');
            $table->string('TipodeDo');
            $table->string('NroDoc');
            $table->string('ApellidosyNombresDenomRazonS');
            $table->string('AGdestina1');
            $table->string('AGdestina2');
            $table->string('AGdestina3');
            $table->string('AGdestina4');
            $table->string('AGdestina5');
            $table->string('AGdestina6');
            $table->string('AdqnoGr');
            $table->string('ISC');
            $table->string('Otros');
            $table->string('ImporteTo');
            $table->string('Moneda');
            $table->string('Tipodeca');
            $table->string('FechadeR');
            $table->string('Tipopara');
            $table->string('Seriedel');
            $table->string('CDPDUA');
            $table->string('NroDelc');
            $table->string('Detracción1');
            $table->string('Detracción2');
            $table->string('Tipodere');
            $table->string('ClasifBi');
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
        Schema::dropIfExists('modulo1s');
    }
}
