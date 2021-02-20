<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceServiceTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_service_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('service_id')
                ->references('id')->on('services')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('service_tag_id')->nullable();
            $table->foreign('service_tag_id')
                ->references('id')->on('service_tags')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_service_tag');
    }
}
