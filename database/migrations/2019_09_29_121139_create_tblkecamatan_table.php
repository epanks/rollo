<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkecamatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kdkecamatan', 7)->unique();
            $table->string('nmkecamatan', 191);
            $table->string('kdkabupaten', 4);
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
        Schema::dropIfExists('tblkecamatan');
    }
}
