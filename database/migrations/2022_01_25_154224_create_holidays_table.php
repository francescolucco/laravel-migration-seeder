<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();

            $table->string('title', 150);
            $table->text('description')->nullable();
            $table->string('address', 100);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->tinyInteger('overnight_stays')->unsigned();
            $table->decimal('price', 7, 2);
            $table->boolean('flight_included')->unsigned()->default(1);
            $table->boolean('insurance')->unsigned()->default(1);

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
        Schema::dropIfExists('holidays');
    }
}
