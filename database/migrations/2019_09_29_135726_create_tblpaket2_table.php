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
            $table->decimal('output', 5, 2)->nullable();
            $table->string('satoutput', 15)->nullable();
            $table->decimal('outcome', 5, 2)->nullable();
            $table->string('satoutcome', 15)->nullable();
            $table->string('kdjnspaket', 3)->nullable();
            $table->string('kdjnskon', 3)->nullable();
            $table->string('kdpengadaan', 3)->nullable();
            $table->string('kdoutput', 3)->nullable();
            $table->unsignedBigInteger('satoutput_id');
            $table->unsignedBigInteger('satoutcome_id');
            $table->unsignedBigInteger('kontrak_id');
            $table->unsignedBigInteger('masalah_id');
            $table->unsignedBigInteger('note_id');
            $table->unsignedBigInteger('procurement_id');
            $table->unsignedBigInteger('abjiat_id');
            $table->unsignedBigInteger('paket1_id');
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
        Schema::dropIfExists('tblpaket2');
    }
}
