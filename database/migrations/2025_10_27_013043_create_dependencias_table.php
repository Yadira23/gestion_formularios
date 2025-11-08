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
    Schema::create('dependencias', function (Blueprint $table) {
        $table->id('id_Dependencia'); // PK automática
        $table->string('usuario_Depen', 50);
        $table->string('sector_Depen', 50);
        $table->string('telefono_Depen', 20);
        $table->string('extension_Depen', 10)->nullable();
        $table->string('email_Depen', 30);
        $table->string('calle_Depen', 50);
        $table->string('numero_Depen', 10);
        $table->string('colonia_Depen', 50);
        $table->string('cp_Depen', 10);
        $table->timestamps(); // crea created_at y updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependencias');
    }
};
