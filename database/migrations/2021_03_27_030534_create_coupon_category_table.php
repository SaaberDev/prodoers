<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_category', function (Blueprint $table) {
            $table->id();
            // Foreign Key Constraint [Coupons Table]
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->foreign('coupon_id')
                ->references('id')->on('coupons')
                ->onDelete('set null')->onUpdate('cascade');

            // Foreign Key Constraint [Service Categories Table]
            $table->unsignedBigInteger('service_category_id')->nullable();
            $table->foreign('service_category_id')
                ->references('id')->on('service_categories')
                ->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('coupon_category');
    }
}
