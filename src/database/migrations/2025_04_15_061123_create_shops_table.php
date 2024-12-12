<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{

    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('genre_id');
            $table->string('shop_name',255);
            $table->string('comment',255);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
