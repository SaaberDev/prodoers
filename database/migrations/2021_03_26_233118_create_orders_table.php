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
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('service_id')->nullable()->constrained();

            $table->string('order_number')->unique()->nullable();
            $table->string('requirements')->nullable();
            $table->string('delivery_time')->nullable();
            $table->string('applied_coupon')->nullable();
            $table->enum('order_status', ['pending', 'ongoing', 'delivered', 'in_revision', 'cancelled', 'completed']);
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
