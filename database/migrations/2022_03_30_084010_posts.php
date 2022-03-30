<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
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
            $table->foreignId('thread_id')->constrained("threads");
            $table->foreignId('user_id')->constrained("users");
            $table->string('title' , 45);        
            $table->timestamps();
            $table->longtext('description');


          //  $table->foreign('type_id')->references("name")->on("types");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("posts");
    }
}
