<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('images', 255)->nullable();
            $table->string('title', 255)->nullable();
            $table->string('caption', 255)->nullable();
            $table->longText('description')->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('published', ['yes', 'no'])->nullable();
            $table->string('tags', 255)->nullable();            
            $table->softDeletes();
            $table->timestamps();
            //$table->timestamp('published_at')->nullable(); Create created_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
