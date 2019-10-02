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
            $table->decimal('rencana_keu', 5, 2)->nullable();
            $table->decimal('rencana_fisik', 5, 2)->nullable();
            $table->decimal('progres_keu', 5, 2)->nullable();
            $table->decimal('progres_fisik', 5, 2)->nullable();
            $table->year('ta')->nullable();
            $table->unsignedBigInteger('tblsatker_id')->nullable();
            $table->timestamps()->current_timestamp();

            $table->foreign('tblsatker_id')->references('id')->on('tblsatker');
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
