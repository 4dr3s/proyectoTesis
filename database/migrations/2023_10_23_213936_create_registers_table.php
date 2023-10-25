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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('identification')->unique();
            $table->string('identification_type');
            $table->string('primerApellido');
            $table->string('segundoApellido');
            $table->string('primerNombre');
            $table->string('segundoNombre');
            $table->string('genre', 9);
            $table->string('etnia');
            $table->date('birthday');
            $table->string('country');
            $table->string('province');
            $table->string('canton');
            $table->date('date_start_studies');
            $table->date('date_graduation');
            $table->string('mechanism');
            $table->string('carrera');
            $table->double('note_average');
            $table->double('note_english');
            $table->integer('practices_hours');
            $table->integer('vinculation_hours');
            $table->string('codigo')->nullable();
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
        Schema::dropIfExists('registers');
    }
};
