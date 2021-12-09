<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            //Structure
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->unsigned()->index();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->string('location')->nullable();
            $table->text('bio')->nullable();
            $table->string('url_twitter')->nullable();
            $table->string('url_facebook')->nullable();
            $table->string('url_instagram')->nullable();
            $table->string('url_pinterest')->nullable();
            $table->string('image_avatar')->nullable();
            $table->string('image_header')->nullable();
            $table->string('colorscheme')->nullable();
            $table->timestamps();

            //Relationships
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
