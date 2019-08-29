<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('type_client','client');
        Schema::rename('type_produitcommande','lignecommande');
        Schema::rename('type_produitpromotion','lignepromotion');
        Schema::rename('type_produitfourniseur','produitfourniseur');
        Schema::rename('typeproduit','categorie');
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
