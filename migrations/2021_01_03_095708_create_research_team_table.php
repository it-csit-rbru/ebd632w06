<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_team', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("rsc_id")->unsigned();
            $table->foreign("rsc_id")->references("id")->on("research");
            $table->integer("rsr_id")->unsigned();
            $table->foreign("rsr_id")->references("id")->on("researcher");
            $table->decimal("partial_rate",5,2);
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
        Schema::dropIfExists('research_team');
    }
}
