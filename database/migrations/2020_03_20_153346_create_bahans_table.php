<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahans', function (Blueprint $table) {
            $table->id('IDBahan');

            $table->string('Kode')->unique();
            $table->string('Nama');
            $table->string('Jenis');
            $table->string('TempatPenyimpanan');
            $table->integer('Jumlah');
            $table->bigInteger('Harga');
            $table->string('Satuan');

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
        Schema::dropIfExists('bahans');
    }
}
