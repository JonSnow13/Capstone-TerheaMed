<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name');
            $table->string('picture')->nullable();
            $table->string('brand_name')->nullable();
            $table->text('desc');
            $table->text('purpose');
            $table->string('takers');
            $table->text('untakers')->nullable();
            $table->text('how_to_take');
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
        Schema::dropIfExists('medicines');
    }
}
