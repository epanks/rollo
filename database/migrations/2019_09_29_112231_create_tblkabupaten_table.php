<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkabupaten', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kdkabupaten', 4)->unique();
            $table->string('nmkabupaten', 191);
            $table->string('kdprovinsi', 2);
            $table->timestamps();

            $table->foreign('kdprovinsi')->references('kdprovinsi')->on('tblprovinsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblkabupaten');
    }
}
