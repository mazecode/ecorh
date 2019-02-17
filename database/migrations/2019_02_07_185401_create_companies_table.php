<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use PharIo\Manifest\Email;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->nullable();
            $table->string('domicilio_social')->nullable();
            $table->string('localidad')->nullable();
            $table->string('web')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->string('cif')->nullable();
            $table->string('forma_juridica')->nullable();
            $table->year('creada_en')->nullable();
            $table->integer('total_plantilla')->nullable();
            $table->string('sector_actividad')->nullable();
            $table->string('actividad')->nullable();
            $table->string('mercados_objetivos');
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
        Schema::dropIfExists('empresas');
    }
}
