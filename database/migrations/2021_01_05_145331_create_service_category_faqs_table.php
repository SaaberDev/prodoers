<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceCategoryFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_category_faqs', function (Blueprint $table) {
            $table->id();
            // Foreign Key Constraint
            $table->unsignedBigInteger('service_category_id');
            $table->foreign('service_category_id')
                ->references('id')->on('service_categories')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('question');
            $table->longText('answer');
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
        Schema::dropIfExists('service_category_faqs');
    }
}
