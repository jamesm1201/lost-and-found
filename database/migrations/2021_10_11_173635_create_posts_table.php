<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('email');
            $table->string('contact_number')->nullable();
            $table->date('date_found_lost')->nullable();
            $table->string('content');
            $table->bigInteger('item_id')->unsigned();
            //$table->bigInteger('place_id')->unsigned();
            //add item and place when relationships done
            
            // $table->foreign('place_id')->references('id')->on('places')
            // ->onDelete('cascade')->onUpdate('cascade');
            
            $table->foreign('item_id')->references('id')->on('items')
             ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
