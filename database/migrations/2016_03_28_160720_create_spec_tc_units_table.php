<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecTcUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spec_tc_units', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('template_category_id')->unsigned();
            $table->integer('unit_id')->unsigned();
            $table->integer('spec_id')->unsigned();
            $table->timestamps();

            $table->foreign('template_category_id')->references('id')->on('template_categories');
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('spec_id')->references('id')->on('specs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('spec_tc_units');
    }
}
