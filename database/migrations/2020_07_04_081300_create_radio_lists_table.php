<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadioListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radio_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id')->default(0);
            $table->integer('category_id')->default(0);
            $table->integer('sub_category_id')->default(0);
            $table->integer('genres_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->string('name');
            $table->string('station_website')->nullable();
            $table->string('staion_logo')->nullable();
            $table->string('staion_banner')->nullable();
            $table->string('streaming_link');
            $table->string('fb_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('tiktok_link')->nullable();
            $table->string('x_link')->nullable();
            $table->integer('count')->default(0);
            $table->longText('description');
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
        Schema::dropIfExists('radio_lists');
    }
}
