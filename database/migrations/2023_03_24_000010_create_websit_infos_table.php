<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitInfosTable extends Migration
{
    public function up()
    {
        Schema::create('websit_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone_number');
            $table->string('facebook_link');
            $table->string('insta_link');
            $table->string('youtube_link');
            $table->string('who_us');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
