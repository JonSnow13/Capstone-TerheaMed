<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToMedicineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medicines', function(Blueprint $table){
            $table->dropColumn('untakers');
            $table->renameColumn('how_to_take', 'direction_of_use');
            $table->text('side_effects')->nullable();
            $table->renameColumn('takers', 'warningMsg')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
