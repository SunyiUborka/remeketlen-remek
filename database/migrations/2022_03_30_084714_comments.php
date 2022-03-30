<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('comments', function (Blueprint $table) {
                $table->uuid('id')->default(DB::raw('(UUID())'))->primary();;
                $table->foreignUuid('post_id')->constrained("posts");
                $table->foreignUuid('user_id')->constrained("users");
                $table->longtext('text' , 45);        
                $table->timestamps();
                
    
    
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
        Schema::dropIfExists("comments");
    }
}
