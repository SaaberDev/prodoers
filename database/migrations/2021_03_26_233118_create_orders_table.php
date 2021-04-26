<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // Foreign Key Constraint [Users & Services Table]
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();

            $table->string('order_number')->unique()->nullable();
            $table->string('requirements')->nullable();
            $table->string('delivery_time')->nullable();
            $table->string('applied_coupon')->nullable();
            $table->enum('order_status', ['pending', 'ongoing', 'delivered', 'in_revision', 'cancelled', 'completed']);
            $table->timestamps();
        });

        // Polymorphic Coupon Schema
        Schema::create('orderables', function (Blueprint $table) {
            // Foreign Key Constraint [Service Categories Table]
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('orderable_id');
            $table->string('orderable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('orderables');
    }
}
