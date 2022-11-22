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
        Schema::create('farmacias', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('procedencia_id')->unsigned();
            $table->string('NombreFarmacia')->nullable();
            $table->string('DireccionFarmacia')->nullable();
            $table->string('Responsable')->nullable();

            
            $table->timestamps();

            $table->foreign('procedencia_id')
            ->references('id')
            ->on('procedencias')
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
