<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bords', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('title', 50)->nullable();
            $table->string('comment', 300);
            $table->timestamps();
            $table->unsignedInteger('big_categories_id')->unsigned();
            $table->unsignedInteger('small_categories_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bords');
    }
}
