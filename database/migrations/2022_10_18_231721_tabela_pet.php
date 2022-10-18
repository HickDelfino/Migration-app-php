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
        Schema::create('Pet', function (Blueprint $table) {
            $table->id();
            $table->string('Nome');
            $table->string('Tipo_De_Animal');
            $table->date('Data_de_Nacimeto');
            $table->string('Nome');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIFexist('TipoDeAnima');
    }
};
