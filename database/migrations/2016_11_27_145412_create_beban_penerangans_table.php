<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBebanPenerangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beban_penerangans', function(Blueprint $table) {
            $table->increments('bebanpen_id');
            $table->string('nm_ruang');
            $table->string('jns_lamp');
            $table->string('jml_lamp');
            $table->bigInteger('daya_lamp');
            $table->bigInteger('tot_pemakaian');
            $table->dateTime('wktu_pengukuran');
            $table->bigInteger('tot_dayapen');
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
        Schema::drop('beban_penerangans');
    }

}
