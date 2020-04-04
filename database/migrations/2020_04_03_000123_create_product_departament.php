<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDepartament extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_departament', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('departament_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cacade');
            $table->foreign('departament_id')->references('id')->on('departaments')->onDelete('cacade');
            $table->primary(['product_id','departament_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_departament');
    }
}
