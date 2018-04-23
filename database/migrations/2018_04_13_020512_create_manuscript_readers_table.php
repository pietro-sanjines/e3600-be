<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManuscriptReadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuscript_readers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comments');
            $table->date('date_start');
            $table->date('date_end');
            $table->integer('id_manuscript');
            $table->integer('id_reader');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manuscript_readers');
    }
}
