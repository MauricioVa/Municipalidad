<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('farmaco_id')->unsigned();
            $table->string('Rut')-> unique();
            $table->dateTime('fechaemicion', $precision = 0);
            $table->string('Comuna');
            $table->string('NombreApoderado')->nullable();
            $table->string('RutApoderado')->unique()->nullable()->nullable();
            $table->string('RP_prescripcion')->nullable();
            $table->string('AlternativaComercial')->nullable();
            $table->string('ViaAdministracion');
            $table->string('Frecuencia')->nullable();
            $table->string('PeriodoTratamiento')->nullable();
            
            $table->timestamps();

            $table->foreign('farmaco_id')
            ->references('id')
            ->on('farmacos')
            ->onDelete("cascade");

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
