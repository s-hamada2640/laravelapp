<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->nullable(false);
            $table->string('title', 50);
            $table->string('comment', 300)->nullable(false);
            $table->timestamps();
            $table->unsignedInteger('big_category_id');
            $table->foreign('big_category_id')->references('id')->on('big_categories')->nullable(false);
            $table->unsignedInteger('small_category_id');
            $table->foreign('small_category_id')->references('id')->on('small_categories')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('replies');
    }
}
