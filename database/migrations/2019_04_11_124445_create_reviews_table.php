<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('food_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('comment_id');
            $table->string('content');
            $table->string('price_start');
            $table->string('payment_method');
            $table->string('open_hours');
            $table->boolean('reservation')->default('0');
            $table->boolean('alcohol')->default('0');
            $table->boolean('halal_label')->default('0');
            $table->boolean('halal_certified')->default('0');
            $table->enum('spicy_level',['0','1','2','3']);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
