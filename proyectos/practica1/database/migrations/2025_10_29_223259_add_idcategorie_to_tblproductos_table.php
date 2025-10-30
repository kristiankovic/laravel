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
        //cuando se llama a ::table se indica que se quiere modificar una tabla
        Schema::table('tbl_productos', function (Blueprint $table) {
            //siempre al agregar un campo poner la propiedad nullable()
            $table->integer('id_categorie')->nullable()->after('stock');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::table('tbl_productos', function (Blueprint $table) {

            //elimina la columna creada
            $table->dropColumn('id_categorie');
        });
    }
};
