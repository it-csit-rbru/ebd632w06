<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nameth");
            $table->string("nameen");
            $table->decimal("budget",12,2);
            $table->integer("rfp_id")->unsigned();
            $table->foreign("rfp_id")->references("id")->on("research_fund_provider");
            $table->date("contract_signed");
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
        Schema::dropIfExists('research');
    }
}
