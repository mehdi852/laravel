<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('hometeam');
            $table->string('homeposession');
            $table->integer('homepercent');
            $table->integer('homerank');
            $table->integer('homepoints');
            $table->string('homeattack');
            $table->string('homedefence');
            $table->string('homelastgames');
            $table->float('homegoals');
            $table->float('homeAvgPossesion');
            $table->float('homePassAccuracy');

            $table->string('awayteam');
            $table->string('awayposession');
            $table->integer('awaypercent');
            $table->integer('awayrank');
            $table->integer('awaypoints');
            $table->string('awayattack');
            $table->string('awaydefence');
            $table->string('awaylastgames');
            $table->float('awaygoals');
            $table->float('awayAvgPossesion');
            $table->float('awayPassAccuracy');

            $table->string('generaltips');
            $table->string('risk');
            $table->string('available')->default("true");
            $table->string('status')->default("inplay");
            


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
        Schema::dropIfExists('matches');
    }
}
