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
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('receta_id')->unsigned();
            $table->string('nombre');
            $table->string('Rut')-> unique();
            $table->string('FechaNacimiento');
            $table->string('Fono')->nullable();
            $table->string('Email')-> unique();
            $table->string('imagen')->nullable();
            
            $table->timestamps();

            $table->foreign('receta_id')
                ->references('id')
                ->on('recetas')
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
