<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpaket1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpaket1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kdsatker', 8);
            $table->string('nmpaket', 254);
            $table->decimal('pagurmp', 20, 0);
            $table->year('ta')->nullable();
            $table->string('satker_id', 8);
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
        Schema::dropIfExists('tblpaket1');
    }
}
