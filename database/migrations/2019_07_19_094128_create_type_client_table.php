<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_client', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->char('sexe');
            $table->integer('age');
            $table->datetime('datenaiss');
            $table->string('lieunaiss');
            $table->string('nationnalite');
            $table->string('adresse');
            $table->string('tel');
            $table->string('email')->unique();
            $table->integer('commande_id')->unsigned();
            $table->foreign('commande_id')
                ->references('id')
                ->on('commande');
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
        Schema::dropIfExists('type_client');
    }
}
