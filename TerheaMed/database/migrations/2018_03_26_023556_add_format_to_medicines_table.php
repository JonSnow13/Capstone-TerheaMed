<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFormatToMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medicines', function(Blueprint $table){
            $table->renameColumn('side_effects', 'side_effect')->after('direction_of_use');
            $table->string('format')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicines', function(Blueprint $table){
            $table->renameColumn('side_effect', 'side_effects');
            $table->dropColumn('format');
        });
    }
}
