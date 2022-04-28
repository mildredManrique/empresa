<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoReglonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_reglons', function (Blueprint $table) {
            $table->bigIncrements('id_codigo', 11);
            $table->char('unidad_medida', 10);
            $table->double('cantidad', 13, 3);
            $table->double('precio_1', 13, 3);                       
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
        Schema::dropIfExists('documento_reglons');
    }
}
