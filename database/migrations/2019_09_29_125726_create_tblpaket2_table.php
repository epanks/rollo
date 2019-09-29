<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpaket2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpaket2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kdjnspaket', 3)->nullable();
            $table->string('kdjnskon', 3)->nullable();
            $table->string('kdpengadaan', 3)->nullable();
            $table->string('kdoutput', 3)->nullable();
            $table->unsignedBigInteger('tblkontrak_id');
            $table->unsignedBigInteger('tblmasalah_id');
            $table->unsignedBigInteger('tblnote_id');
            $table->unsignedBigInteger('tblprocurement_id');
            $table->unsignedBigInteger('tblabjiat_id');
            $table->timestamps();

            $table->foreign('tblabjiat_id')->references('id')->on('tblabjiat');
            $table->foreign('tblkontrak_id')->references('id')->on('tblkontrak');
            $table->foreign('tblmasalah_id')->references('id')->on('tblmasalah');
            $table->foreign('tblnote_id')->references('id')->on('tblnote');
            $table->foreign('tblprocurement_id')->references('id')->on('tblprocurement');
            $table->foreign('kdjnspaket')->references('kdjnspaket')->on('tblkdjnspaket');
            $table->foreign('kdjnskon')->references('kdjnskon')->on('tblkdjnskon');
            $table->foreign('kdpengadaan')->references('kdpengadaan')->on('tblkdpengadaan');
            $table->foreign('kdoutput')->references('kdoutput')->on('tblkdoutput');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblpaket2');
    }
}
