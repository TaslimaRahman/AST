<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialTimeTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_time_track', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('material_id')->index();
            $table->integer('time_track_id')->index();
            $table->integer('quantity')->unsigned();
            $table->integer('material_status')->unsigned();
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
        Schema::dropIfExists('material_time_track');
    }
}
