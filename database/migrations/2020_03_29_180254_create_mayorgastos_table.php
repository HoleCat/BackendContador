<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMayorgastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mayorgastos', function (Blueprint $table) {
            $table->id();
            $table->string('Anno')->nullable();
            $table->string('Mes')->nullable();
            $table->string('IdOrigen')->nullable();
            $table->string('Origen')->nullable();
            $table->string('NroAsiento')->nullable();
            $table->string('Fecha')->nullable();
            $table->string('GlosaCab')->nullable();
            $table->string('Cuenta')->nullable();
            $table->string('DescriCta')->nullable();
            $table->string('IdCenCos')->nullable();
            $table->string('CenCosto')->nullable();
            $table->string('IndDebHab')->nullable();
            $table->string('TipCamDet')->nullable();
            $table->string('Imp_Sig_MN')->nullable();
            $table->string('Imp_Sig_ME')->nullable();
            $table->string('IdTipDoc')->nullable();
            $table->string('NroDoc')->nullable();
            $table->string('NroDocRef')->nullable();
            $table->string('GlosaDet')->nullable();
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
        Schema::dropIfExists('mayorgastos');
    }
}
