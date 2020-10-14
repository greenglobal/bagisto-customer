<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAttributeOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custome_attribute_options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admin_name')->nullable();
            $table->integer('sort_order')->nullable();
            $table->integer('customer_attribute_id')->unsigned();
            $table->foreign('customer_attribute_id')->references('id')->on('customer_attributes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custome_attribute_options');
    }
}
