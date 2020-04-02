<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTable extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('images')->nullable();
            $table->string('intro_text')->nullable();
            $table->string('title')->nullable();
            $table->string('page_title')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->text('seo_text')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
