<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanBahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_bahans', function (Blueprint $table) {
            $table->id('IDPengajuanBahan');
            $table->integer('IDUser');
            $table->integer('IDBahan');
            $table->integer('Jumlah');
            $table->string('Status');
            $table->integer('ActionBy');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_bahans');
    }
}
