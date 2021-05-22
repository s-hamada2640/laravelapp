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
        Schema::create('bords', function (Blueprint $table) {
            $table->increment('id');
            $table->integer('bords_id')->unsigned();
            $table->string('name', 50);
            $table->string('comment', 300);
            $table->timestamps();
            $table->foreign("bords_id")->references("id")->on("bords");
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
