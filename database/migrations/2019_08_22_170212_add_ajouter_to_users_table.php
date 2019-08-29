<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAjouterToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string( 'prenom', 20);
            $table->integer( 'age');
            $table->string('sexe', 1);
            $table->string('adresse', 20);
            $table->string('pays', 30);
            $table->string('tel', 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('prenom');
            $table->dropColumn( 'age');
            $table->dropColumn('sexe');
            $table->dropColumn('adresse');
            $table->dropColumn('pays');
            $table->dropColumn('tel');
        });
    }
}
