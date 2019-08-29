<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelivraisonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelivraison', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('libe');
            $table->integer('livraison_id')->unsigned();
            $table->foreign('livraison_id')
                ->references('id')
                ->on('livraison');
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
        Schema::dropIfExists('modelivraison');
    }
}
