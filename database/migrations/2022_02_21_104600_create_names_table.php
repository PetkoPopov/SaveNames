<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('names', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("name")->unique();
            $table->string("explenation")->nullable();
            $table->string("ocupation")->nullable();
            $table->string("quote")->nullable();
            $table->integer("age")->nullable();
            
        });
//         Schema::create('cars', function (Blueprint $table) {
//            $table->id();
//            $table->unsignedInteger('names_id');
//            $table->timestamps();
//            $table->foreign('names_id')
//                    ->references('id')
//                    ->on('names')
//                    ->onDelete('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('names');
    }
}
