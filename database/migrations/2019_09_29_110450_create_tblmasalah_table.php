<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblmasalahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblmasalah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('masalah')->nullable();
            $table->string('lampiran1')->nullable();
            $table->string('lampiran2')->nullable();
            $table->string('lampiran3')->nullable();
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
        Schema::dropIfExists('tblmasalah');
    }
}
