<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('coupon_code')->unique();
            $table->string('coupon_type')->nullable(); // Fixed or Percentage
            $table->string('published_status')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('amount')->nullable();
            $table->string('percent_off')->nullable();
            $table->timestamps();
        });

        // Polymorphic Coupon Schema
        Schema::create('couponables', function (Blueprint $table) {
            // Foreign Key Constraint [Service Categories Table]
            $table->unsignedBigInteger('coupon_id');
            $table->foreign('coupon_id')
                ->references('id')->on('coupons')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('couponable_id');
            $table->string('couponable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
        Schema::dropIfExists('couponables');
    }
}
