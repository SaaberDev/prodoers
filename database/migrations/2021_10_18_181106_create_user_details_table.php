<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->mediumText('address')->nullable();
            $table->string('country')->nullable();
            $table->double('phone')->nullable();
            $table->double('postal_code')->nullable();

            $table->string('billing_name')->nullable();
            $table->string('billing_email')->nullable();
            $table->mediumText('billing_address')->nullable();
            $table->string('billing_company_name')->nullable();
            $table->string('billing_tax_id')->nullable();
            $table->string('billing_country')->nullable();
            $table->string('billing_city')->nullable();
            $table->double('billing_postal_code')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
