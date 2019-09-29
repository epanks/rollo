<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkdoutputTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkdoutput', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kdoutput', 1)->unique();
            $table->string('nmoutput', 191);
            $table->string('nmabat', 191);
            $table->string('nmrehabbangun', 191);
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
        Schema::dropIfExists('tblkdoutput');
    }
}
