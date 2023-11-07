<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RemoveImgFromImagePath extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('opcine', function (Blueprint $table) {
        DB::table('opcine')
            ->where('grb', 'like', 'img/%')
            ->orWhere('favico', 'like', 'img/%')
            ->orWhere('background', 'like', 'img/%')
            ->update([
                'grb' => DB::raw("REPLACE(grb, 'img/', '')"),
                'favico' => DB::raw("REPLACE(favico, 'img/', '')"),
                'background' => DB::raw("REPLACE(favico, 'img/', '')"),
            ]);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('image_path', function (Blueprint $table) {
            //
        });
    }
}
