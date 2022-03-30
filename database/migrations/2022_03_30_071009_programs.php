<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Programs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->uuid('id')->default(DB::raw('(UUID())'))->primary();;
            $table->foreignUuid('type_id')->constrained("types");
            $table->string('author' , 255);
            $table->date("release_date");
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
        Schema::dropIfExists('programs');
    }
}
