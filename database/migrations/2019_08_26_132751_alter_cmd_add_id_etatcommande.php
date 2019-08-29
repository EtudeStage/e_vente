<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCmdAddIdEtatcommande extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('commande', function (Blueprint $table) {

                $table->integer('etat_commande_id')->unsigned()->nullable();

                $table->foreign('etat_commande_id')
                    ->references('id')
                    ->on('etat_commande');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::table('commande', function (Blueprint $table) {
                $table->removeColumn( 'etat_commande_id');

        });
    }
}
