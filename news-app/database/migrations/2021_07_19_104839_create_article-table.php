<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('articles', function(Blueprint $table){
            $table->id();
            $table->string('author_name')->nullable();
            $table->timestamp('date_of_publish')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable() ; 
            $table->string('video')->nullable() ; 
            $table->text('category')->nullable();
            $table->unsignedBigInteger('user_id');
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
        //
    }
}
