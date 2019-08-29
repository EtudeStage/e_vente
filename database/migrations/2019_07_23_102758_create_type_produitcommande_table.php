<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeProduitcommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_produitcommande', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nbproduit');
            $table->integer('produit_id')->unsigned();
            $table->integer('commande_id')->unsigned();

            $table->foreign('produit_id')->references('id')->on('produit')
                          ->onDelete('restrict')
                          ->onUpdate('restrict');


            $table->foreign('commande_id')->references('id')->on('commande')
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
        schema::table('type_produitcommande',function(Blueprint $table){
          $table->dropForeign('type_produitcommande_produit_id_foreign');
          $table->dropForeign('type_produitcommande_commande_id_foreign');
    });

        Schema::dropIfExists('type_produitcommande');
    }
}
