<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCthdsTable extends Migration
{
    public function up()
    {
        Schema::create('cthds', function (Blueprint $table) {
            $table->increments('SOHD');
            $table->char('MASP', 10);
            $table->integer('SL');
            $table->decimal('THANHTIEN', 10, 2);
            $table->foreign('SOHD')->references('SOHD')->on('hoadons');
            $table->foreign('MASP')->references('MASP')->on('sanphams');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cthds');
    }
}

