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
            $table->increment('id');
            $table->unsignedInteger('bord_id');
            $table->foreign('bord_id')->references('id')->on(bords)->nullable(false);
            $table->string('name', 50);
            $table->string('comment', 300);
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
        Schema::dropIfExists('bords');
    }
}
