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
            // Foreign Key Constraint [Users Table]
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null')->onUpdate('cascade');

            // Foreign Key Constraint [Users Table]
            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('service_id')
                ->references('id')->on('services')
                ->onDelete('set null')->onUpdate('cascade');

            $table->string('order_number')->unique()->nullable();
            $table->string('requirements')->nullable();
            $table->string('payment_method')->nullable();
            $table->enum('payment_status', ['pending', 'paid', 'cancelled']);
//            $table->string('delivery_time');

            $table->enum('order_status', ['pending', 'ongoing', 'delivered', 'in_revision', 'cancelled', 'completed']);
            $table->double('pay_amount')->nullable();
            $table->double('discount')->nullable();
            $table->string('applied_coupon')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
