<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('isplate', function (Blueprint $table) {
            $table->id(); // Auto-increment ID column
            $table->unsignedBigInteger('rkpid')->index();
            $table->foreign('rkpid')->references('rkpid')->on('opcines')->onDelete('cascade');
            $table->string('naziv')->nullable();
            $table->string('adresa')->nullable();
            $table->string('mjesto')->nullable();
            $table->string('zupanija')->nullable();
            $table->string('homepage')->nullable(); // Allowing for potential null values
            $table->string('oib')->nullable();
            $table->string('url')->nullable();
            $table->string('grb')->nullable();
            $table->string('favico')->nullable();
            $table->string('background')->nullable();
            $table->string('isplatitelj')->nullable();
            $table->string('vrstarashoda')->nullable();
            $table->string('opis')->nullable();
            $table->string('primatelj')->nullable();
            $table->string('iznos')->nullable();
            $table->unsignedBigInteger('isplatiteljrkp');
            $table->unsignedBigInteger('kategorija')->index();
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
