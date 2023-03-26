<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDifferentsTable extends Migration
{
    public function up()
    {
        Schema::create('product_differents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_difference');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
