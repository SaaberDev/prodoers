<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_features', function (Blueprint $table) {
            $table->id();
            // Foreign Key Constraint
            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('service_id')
                ->references('id')->on('services')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('feature_desc')->nullable();
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
        Schema::dropIfExists('service_features');
    }
}
