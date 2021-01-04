<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearcherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('researcher', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("ttl_id")->unsigned();
            $table->foreign("ttl_id")->references("id")->on("title");
            $table->string("fname");
            $table->string("lname");
            $table->integer("fct_id")->unsigned();
            $table->foreign("fct_id")->references("id")->on("faculty");
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
        Schema::dropIfExists('researcher');
    }
}
