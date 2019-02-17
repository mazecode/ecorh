<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->dateTime('fecha_nacimiento');
            $table->enum('sexo', ['f', 'm']);
            $table->string('fecha_alta_empresa')->nullable();
            $table->enum('acceso_empresa', ['web', 'promocion_interna', 'infojobs'])->nullable();
            $table->enum('coste_contratacion', ['anuncio_prensa', 'web', 'rrss', 'headhunter'])->nullable();
            $table->string('centro_trabajo')->nullable();
            $table->string('rlt')->nullable();
            $table->string('miembro_comite')->nullable();
            $table->boolean('persona_discapacidad')->nullable();
            $table->boolean('origen_extranjero')->nullable();
            $table->boolean('pueblo_gitano')->nullable();
            $table->string('lgtbi')->nullable();
            $table->string('otro_colectivo')->nullable();
            $table->string('tipo_contrato')->nullable();
            $table->string('turno_trabajo')->nullable();
            $table->tinyInteger('horas_semanales')->nullable();
            $table->string('nive_estudios')->nullable();
            $table->string('causa_baja_dos_anos')->nullable();
            $table->string('departamento')->nullable();
            $table->string('nivel_profesional')->nullable();
            $table->string('retribucion')->nullable();
            $table->year('formacion_recibida_ano_curso')->nullable();
            $table->integer('coste_formacion')->nullable();
            $table->boolean('reduccion_jornada')->nullable();
            $table->string('tipo_reduccion')->nullable();
            $table->tinyInteger('duracion_reduccion')->nullable();
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
        Schema::dropIfExists('people');
    }
}
