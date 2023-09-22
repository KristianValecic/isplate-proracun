<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isplate', function (Blueprint $table) {
            $table->id(); // Auto-increment ID column
            $table->unsignedBigInteger('rkpid')->index();
            $table->foreign('rkpid')->references('rkpid')->on('opcines')->onDelete('cascade');
            $table->string('naziv');
            $table->string('adresa');
            $table->string('mjesto');
            $table->string('zupanija');
            $table->string('homepage')->nullable(); // Allowing for potential null values
            $table->string('oib');
            $table->string('url');
            $table->string('grb')->nullable();
            $table->string('favico')->nullable();
            $table->string('background')->nullable();
            $table->text('description')->nullable(); // Assuming descriptions can be longer than a string
            $table->timestamps(); // Automatically add created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('isplate');
    }
}
