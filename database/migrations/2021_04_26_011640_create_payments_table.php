<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            // Foreign Key Constraint [Users Table]
//            $table->unsignedBigInteger('order_id')->nullable();
            $table->double('paid_amount')->nullable();
            $table->string('transaction_id')->unique()->nullable();
            $table->double('discount')->nullable();
            $table->string('payment_method')->nullable();
            $table->enum('payment_status', ['paid', 'failed']);
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
        Schema::dropIfExists('payments');
    }
}
