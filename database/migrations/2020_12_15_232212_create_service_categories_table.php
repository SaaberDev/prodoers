<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('meta_desc');
            $table->longText('order_instruction_desc');
            $table->string('slug');
            $table->longText('short_desc');
            $table->tinyInteger('navbar_status')->default('0');
            $table->tinyInteger('published_status')->default('0');
            $table->tinyInteger('popular_status')->default('0');
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
        Schema::dropIfExists('service_categories');
    }
}
