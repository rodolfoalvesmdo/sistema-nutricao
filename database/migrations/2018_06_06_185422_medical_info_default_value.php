<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MedicalInfoDefaultValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->integer('altura')->default('0')->change();
            $table->integer('imc')->default('0')->change();
            $table->integer('mm')->default('0')->change();
            $table->integer('gordura')->default('0')->change();
            $table->boolean('lactose')->default('0')->change();
            $table->boolean('diabetes')->default('0')->change();
            $table->boolean('hipertensao')->default('0')->change();
            $table->boolean('cardiaco')->default('0')->change();
            $table->boolean('exercicio')->default('0')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            //
        });
    }
}
