<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Brief extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('briefs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('trabalho')->nullable();
            $table->string('email', 100);
            $table->string('telefone', 15);
            $table->text('problema')->nullable();
            $table->text('beneficios')->nullable();
            $table->text('publicoAlvo')->nullable();
            $table->boolean('site')->default(false);
            $table->boolean('aplicativoMovel')->default(false);
            $table->boolean('sistemaWeb')->default(false);
            $table->boolean('sistemaDesktop')->default(false);
            $table->boolean('curso')->default(false);
            $table->string('arquivo')->nullable()->comment('Caminho do storage');
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
        //
    }
}
