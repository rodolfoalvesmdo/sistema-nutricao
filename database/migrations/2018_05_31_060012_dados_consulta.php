<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DadosConsulta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->integer('altura')->after('peso');
            $table->integer('imc')->after('altura');
            $table->integer('mm')->after('imc');
            $table->integer('gordura')->after('mm');
            $table->boolean('lactose')->after('gordura');
            $table->boolean('diabetes')->after('lactose');
            $table->boolean('hipertensao')->after('diabetes');
            $table->boolean('cardiaco')->after('hipertensao');
            $table->boolean('exercicio')->after('cardiaco');
            
            $table->string('frequencia')->nullable()->after('exercicio');
            $table->longText('rf_manha')->nullable()->after('frequencia');
            $table->longText('rf_tarde')->nullable()->after('rf_manha');
            $table->longText('rf_noite')->nullable()->after('frequencia');

            $table->longText('cafe_manha')->nullable()->after('rf_noite');
            $table->longText('lanche_manha')->nullable()->after('cafe_manha');
            $table->longText('almoco')->nullable()->after('lanche_manha');
            $table->longText('lanche_tarde')->nullable()->after('almoco');
            $table->longText('jantar')->nullable()->after('lanche_tarde');
            $table->longText('ceia')->nullable()->after('jantar');

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
