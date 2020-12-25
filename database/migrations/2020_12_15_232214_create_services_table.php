<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Foreign Key Constraint [Service Categories Table]
            $table->unsignedBigInteger('service_category_id');
            $table->foreign('service_category_id')
                ->references('id')->on('service_categories')
                ->onDelete('cascade')->onUpdate('cascade');

            // Primary Attributes
            $table->string('title');
            $table->longText('meta_desc');
            $table->tinyInteger('published_status')->default(0)->nullable();
            $table->string('slug');
            $table->decimal('price');
            $table->string('thumbnail');
            $table->longText('service_desc');
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
        Schema::dropIfExists('services');
    }
}
