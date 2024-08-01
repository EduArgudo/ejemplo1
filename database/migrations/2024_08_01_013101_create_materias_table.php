<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('Materia', function (Blueprint $table) {
        $table->id(); // id como entero
        $table->string('nombre',50); // nombre como varchar
        $table->text('descripcion',100); // descripcion como text
        $table->integer('creditos'); // creditos como entero
        $table->enum('tipo', ['Basica', 'Formacion', 'Titulacion']); // tipo con valores especificados
        $table->decimal('valor_hora', 8, 2); // valor_hora como decimal
        $table->enum('estado', ['activo', 'inactivo']); // estado con valores especificados
        $table->timestamps(); // timestamps
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
