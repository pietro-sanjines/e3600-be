<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tittle');
            $table->integer('stock');
            $table->double('price');
            $table->integer('isbn');
            $table->integer('id_author');
            $table->integer('id_gender');
            $table->integer('id_manuscript')->nulleable();
            $table->timestamps();
            /*$table->foreign('id_book_type')->references('id')->on('book_types');
            $table->foreign('id_gender')->references('id')->on('genders');
            $table->foreign('id_author')->references('id')->on('authors');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
