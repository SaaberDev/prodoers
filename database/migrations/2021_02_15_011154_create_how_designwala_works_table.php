<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHowDesignwalaWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('how_designwala_works', function (Blueprint $table) {
            $table->id();
            $table->string('key')->index();
            $table->string('title')->nullable();
            $table->mediumText('desc')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->string('video_thumbnail')->nullable();
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
        Schema::dropIfExists('how_designwala_works');
    }
}
