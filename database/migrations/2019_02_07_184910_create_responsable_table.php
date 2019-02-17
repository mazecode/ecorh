<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('puesto')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->enum('sexo', ['m', 'f', 'o'])->nullable();
            $table->tinyInteger('edad')->nullable();
            $table->string('estudios')->nullable();
            $table->tinyInteger('tiempo_empresa')->nullable();
            $table->mediumText('info_formacion_extra')->nullable();
            $table->string('convenio_colectivo')->nullable();
            $table->string('nombre_convenio')->nullable();
            $table->enum('tipo_convenio', ['S', 'E'])->nullable();
            $table->boolean('representacion_legal_plantilla')->nullable();
            $table->string('relacion_miembros')->nullable();
            $table->string('comite_igualdad')->nullable();
            $table->string('relacion_c_igualdad')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsables');
    }
}
