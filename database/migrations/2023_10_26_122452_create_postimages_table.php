<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostimagesTable extends Migration
{
    public function up()
    {
        Schema::create('postimages', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // Column to store the image file name
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('postimages');
    }
}
