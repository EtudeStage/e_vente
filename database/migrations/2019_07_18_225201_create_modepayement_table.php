<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModepayementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modepayement', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('libe');
            $table->integer('payement_id')->unsigned();
            $table->foreign('payement_id')
                ->references('id')
                ->on('payement');
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
        Schema::dropIfExists('modepayement');
    }
}
