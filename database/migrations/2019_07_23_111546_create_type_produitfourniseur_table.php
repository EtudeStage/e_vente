<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeProduitfourniseurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_produitfourniseur', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('produit_id')->unsigned();
            $table->integer('fourniseur_id')->unsigned();

            $table->foreign('produit_id')->references('id')->on('produit')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');


            $table->foreign('fourniseur_id')->references('id')->on('fourniseur')
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
        schema::table('type_produitfourniseur',function(Blueprint $table) {
            $table->dropForeign('type_produitfourniseur_produit_id_foreign');
            $table->dropForeign('type_produitfourniseur_fourniseur_id_foreign');
        });
        Schema::dropIfExists('type_produitfourniseur');
    }
}
