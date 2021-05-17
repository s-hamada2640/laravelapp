<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('name', 50)->nullable(false);
            $table->string('title', 50);
            $table->string('comment', 300)->nullable(false);
            $table->foreign('big_category_id')->references('id')->on('big_categories')->nullable(false);
            $table->foreign('small_category_id')->references('id')->on('small_categories')->nullable(false);
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
        Schema::dropIfExists('boards');
    }
}
