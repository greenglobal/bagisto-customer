<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAttributeGroupMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_attribute_group_mappings', function (Blueprint $table) {
            $table->integer('cus_attr_id')->unsigned();
            $table->integer('cus_gr_id')->unsigned();
            $table->integer('position')->nullable();
            $table->primary(['cus_attr_id', 'cus_gr_id']);
            $table->foreign('cus_attr_id')->references('id')->on('customer_attributes')->onDelete('cascade');
            $table->foreign('cus_gr_id')->references('id')->on('customer_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_attribute_group_mappings');
    }
}
