<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dt', function (Blueprint $table) {
            $table->id('id');
            $table->string('opi')->nullable()->index();     //AUTO UPDATE KETIKA SIMPAN/UPDATE DIPLANNING PPIC
            $table->string('noMod')->nullable()->index();   //INPUT MARKETING NEXT AUTO
            $table->foreignId('kontrak_d_id')->index();     //INPUT MARKETING
            $table->date('tglKirimDt')->index();            //INPUT MARKETING
            $table->string('hariKirimDt');                  //AUTO
            $table->integer('pcsDt')->nullable();           //INPUT MARKETING
            $table->integer('kgDt');                        //AUTO
            $table->string('noPhp')->nullable()->index();   //INPUT MARKETING NEXT AUTO
            $table->date('tglPhp')->index();                //AUTO MARKETING DARI SJ
            $table->string('hariPhp')->nullable();      //AUTO
            $table->integer('pcsPhp')->nullable();      //AUTO UPDATE SETELAH INSERT PHP
            $table->integer('kgPhp')->nullable();       //AUTO
            $table->string('noSj')->nullable();         //INPUT MARKETING NEXT AUTO
            $table->date('tglSj')->nullable()->index();                      //AUTO MARKETING DARI SJ
            $table->string('hariSj')->nullable();       //AUTO
            $table->integer('pcsSj')->nullable();       //AUTO UPDATE SETELAH INSERT SJ
            $table->integer('kgSj')->nullable();        //AUTO
            $table->string('noSjRetur')->nullable()->index();    //INPUT MARKETING NEXT AUTO
            $table->date('tglSjRetur')->nullable()->index();                 //AUTO MARKETING DARI SJ
            $table->string('hariSjRetur')->nullable();  //AUTO
            $table->integer('pcsRetur')->nullable();    //AUTO UPDATE SETELAH INSERT RETUR SJ
            $table->integer('kgRetur')->nullable();     //AUTO UPDATE SETELAH INSERT RETUR SJ
            $table->integer('piutang')->nullable()->index();                 //AUTO UPDATE SETELAH INSERT FAKTUR
            $table->integer('outstandingPiutang')->nullable()->comment('Piutang belum terbayar')->index();  //AUTO UPDATE SETELAH INSERT FAKTUR
            $table->boolean('lock')->default(0);        //AUTO WHEN PPIC INSERT/UPDATE PLANNING
            //RELATION
            $table->foreign('kontrak_d_id')->references('id')->on('kontrak_d')->cascadeOnDelete();
            // TRACKING
            $table->string('createdBy');                    //Auto ambil dari login
            $table->string('lastUpdatedBy')->nullable();    //Auto ambil dari login
            $table->boolean('deleted')->default(0);         //Update ketika di hapus (default false)
            $table->dateTime('deletedAt')->nullable();      //Auto ambil dari today()
            $table->string('deletedBy')->nullable();        //Auto ambil dari login
            $table->string('branch')->index();                       //Auto ambil dari login awal
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
        Schema::dropIfExists('dt');
    }
}
