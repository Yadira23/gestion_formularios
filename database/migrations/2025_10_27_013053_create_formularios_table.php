<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    Schema::create('formularios', function (Blueprint $table) {
        $table->id('id_Formulario');
        $table->string('titulo_Formulario', 100);
        $table->string('descripcion_Form', 100)->nullable();
        $table->date('fechacreacion_Form');
        $table->string('botonaccion_Form', 50);
        $table->integer('secciones_Form');
        $table->string('periodo_Form', 20);

        // Clave foránea (relación con dependencias)
        $table->unsignedBigInteger('id_Dep');
        $table->foreign('id_Dep')
              ->references('id_Dependencia')
              ->on('dependencias')
              ->onDelete('cascade');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};
