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
            $table->foreignId('service_category_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            // Primary Attributes
            $table->string('title')->index();
            $table->longText('meta_desc');
            $table->longText('desc');
            $table->integer('delivery_time');
            $table->integer('revision_limit');
            $table->tinyInteger('popular_status')->nullable()->default(0);
            $table->tinyInteger('published_status')->nullable()->default(0);
            $table->string('slug');
            $table->decimal('price');
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
