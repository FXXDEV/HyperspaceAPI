<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('visits')){
            Schema::create('visits', function (Blueprint $table) {
                $table->id();
                $table->foreignId('planet_id')->references('id')->on('planets')->onDelete('cascade')->nullable(); 
                $table->foreignId('people_id')->references('id')->on('people')->onDelete('cascade')->nullable(); 
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
