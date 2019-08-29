<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLignecoommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lignecommande', function (Blueprint $table) {
            $table->integer( 'tax');
            $table->integer( 'prixtotal');
            $table->integer( 'qts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lignecommande', function (Blueprint $table) {
            $table->dropColumn( 'tax');
            $table->dropColumn( 'prixtotal');
            $table->dropColumn( 'qts');
        });
    }
}
