<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->uuid('id')->default(DB::raw('(UUID())'))->primary();
            $table->foreignUuid('user_id')->constrained("users");
            $table->string('name' , 45);
            $table->string('type_name');
            $table->foreign('type_name')->references('name')->on('types');
            $table->string('developer' , 255)->nullable();
            $table->date("release_date")->nullable();
            $table->string('program_image',255)->nullable()->default("program_image/no_image.png");
            $table->string('program_file',255)->nullable();
            $table->longtext('description')->nullable();
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
        Schema::dropIfExists('programs');
    }
}
