<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProgCat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prog_cat', function (Blueprint $table) {
           
            $table->foreignUuid('program_id')->constrained("programs");
            $table->foreignUuid('category_name')->constrained("categories");


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
        Schema::dropIfExists('prog_cat');
    }
}
