<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('planets')){
            Schema::create('planets', function (Blueprint $table) {
                $table->id();
                // $table->string('name')->nullable();
                // $table->float('rotation_period')->nullable();
                // $table->float('orbital_period')->nullable();
                // $table->float('diameter')->nullable();
                // $table->string('climate')->nullable();
                // $table->string('gravity')->nullable();
                // $table->string('terrain')->nullable();
                // $table->float('surface_water')->nullable();
                // $table->float('population')->nullable();
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
        Schema::dropIfExists('planets');
    }
}
