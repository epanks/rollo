<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkontrakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkontrak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tglkontrak')->nullable();
            $table->date('tglselesai')->nullable();
            $table->decimal('pagukon', 20, 0)->nullable();
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
        Schema::dropIfExists('tblkontrak');
    }
}
