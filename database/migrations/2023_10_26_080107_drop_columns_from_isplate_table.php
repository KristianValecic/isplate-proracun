<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnsFromIsplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('isplate', function (Blueprint $table) {
            $table->dropColumn('naziv');
            $table->dropColumn('adresa');
            $table->dropColumn('zupanija');
            $table->dropColumn('homepage');
            $table->dropColumn('url');
            $table->dropColumn('grb');
            $table->dropColumn('favico');
            $table->dropColumn('background');
            $table->dropColumn('description');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('isplate', function (Blueprint $table) {
            //
        });
    }
}
