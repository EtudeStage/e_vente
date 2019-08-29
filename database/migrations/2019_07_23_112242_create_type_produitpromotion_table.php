p<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeProduitpromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_produitpromotion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('produit_id')->unsigned();
            $table->integer('promotion_id')->unsigned();

            $table->foreign('produit_id')->references('id')->on('produit')
                       ->onDelete('restrict')
                       ->onUpdate('restrict');


            $table->foreign('promotion_id')->references('id')->on('promotion')
                     ->onDelete('restrict')
                     ->onUpdate('restrict');
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
        schema::table('type_produitpromotion',function(Blueprint $table) {
            $table->dropForeign('type_produitpromotion_produit_id_foreign');
            $table->dropForeign('type_produitpromotion_promotion_id_foreign');
        });
        Schema::dropIfExists('type_produitpromotion');
    }
}
