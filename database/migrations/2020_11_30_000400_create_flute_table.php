<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFluteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flute', function (Blueprint $table) {
            $table->id('id');
            $table->string('kode')->unique()->index();   //Input IT
            $table->string('nama')->index();            //Input IT
            $table->float('tur',4,2);           //Input IT
            // TRACKING
            $table->string('createdBy');        //Auto ambil dari login
            $table->string('lastUpdatedBy')->nullable();    //Auto ambil dari login
            $table->boolean('deleted')->default(0);         //Update ketika di hapus (default false)
            $table->dateTime('deletedAt')->nullable();      //Auto ambil dari today()
            $table->string('deletedBy')->nullable();        //Auto ambil dari login
            $table->string('branch')->index();           //Auto ambil dari login awal
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
        Schema::dropIfExists('flute');
    }
}
