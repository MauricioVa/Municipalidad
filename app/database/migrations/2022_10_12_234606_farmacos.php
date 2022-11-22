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
        Schema::create('farmacos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('farmacia_id')->unsigned();
            $table->string('NombreFarmaco');
            $table->string('Dosis')->nullable();
            $table->string('Laboratorio')->nullable();
            $table->string('ProcedenciaNombre')->nullable();
            $table->integer('Cantidad');
            $table->dateTime('FechaVencimiento',$precision = 0)->nullable();
            $table->string('imagen')->nullable();
            
            $table->timestamps();
            $table->foreign('farmacia_id')
            ->references('id')
            ->on('farmacias')
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
