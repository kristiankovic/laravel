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
        Schema::create('tbl_productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //campo agreado despues de hacer make migrate para probar el migrate:refresh
            //$table->integer('id_categorie')->after('id');

            $table->string('nombre');
            //nombre, numeros de 2 decimales
            $table->decimal('precio', 5, 2);
            $table->integer('stock');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
