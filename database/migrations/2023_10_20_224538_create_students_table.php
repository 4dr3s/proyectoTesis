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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('numero_identificacion', 10)->unique();
            $table->unsignedBigInteger('document_id');
            $table->string('primerApellido');
            $table->string('segundoApellido');
            $table->string('primerNombre');
            $table->string('segundoNombre');
            $table->unsignedBigInteger('sex_id');
            $table->unsignedBigInteger('ethnicity_id');
            $table->date('fechaNacimiento');
            $table->unsignedBigInteger('country_origin_id');
            $table->unsignedBigInteger('country_live_id');
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('canton_id');
            $table->date('fechaInicioEstudios');
            $table->date('fechaEgresamiento');
            $table->date('fechaActaGrado');
            $table->integer('numeroActaGrado');
            $table->date('fechaRefrendacion');
            $table->integer('numeroRefrendacion');
            $table->unsignedBigInteger('mechanism_title_id');
            $table->string('carrera');
            $table->string('linkTesis');
            $table->double('notaPromedioAcumulado');
            $table->double('notaTrabajoTitulacion');
            $table->string('reconocimientoEstudiosPrevios');
            $table->unsignedBigInteger('institution_id');
            $table->string('carreraEstudiosPrevios');
            $table->integer('tiempoEstudiosReconocimiento');
            $table->integer('tiempoDuracionReconocimiento');
            $table->string('tituloBachiller');
            $table->unsignedBigInteger('school_id');
            $table->longText('observaciones')->nullable();
            $table->string('code')->unique();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('students');
    }
};
