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
            $table->string('kdpaket', 3)->nullable();
            $table->string('kdspaket', 3)->nullable();
            $table->string('nmpaket', 254);
            $table->decimal('pagurmp', 20, 0);
            $table->decimal('output', 10, 2)->nullable();
            $table->string('satoutput', 20)->nullable();
            $table->decimal('outcome', 10, 2)->nullable();
            $table->string('satoutcome', 20)->nullable();
            $table->decimal('progres_keu', 3, 2)->nullable();
            $table->decimal('progres_fisik', 3, 2)->nullable();
            $table->unsignedBigInteger('tbllokasi_id')->nullable();
            $table->year('ta')->nullable();
            $table->unsignedBigInteger('tblsatker_id')->nullable();
            $table->unsignedBigInteger('tblpaket2_id')->nullable();
            $table->timestamps();

            $table->foreign('tblsatker_id')->references('id')->on('tblsatker');
            $table->foreign('tblpaket2_id')->references('id')->on('tblpaket2');
            $table->foreign('tbllokasi_id')->references('id')->on('tbllokasi');
            $table->foreign('satoutput')->references('satoutput')->on('tblsatoutput');
            $table->foreign('satoutcome')->references('satoutcome')->on('tblsatoutcome');
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
