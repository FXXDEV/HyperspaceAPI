<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('people')){
            Schema::create('people', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('height')->nullable();
                $table->string('mass')->nullable();
                $table->string('hair_color')->nullable();
                $table->string('skin_color')->nullable();
                $table->string('eye_color')->nullable();
                $table->string('birth_year')->nullable();
                $table->string('gender')->nullable();
                $table->string('homeworld')->nullable();
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
        Schema::dropIfExists('people');
    }
}
