<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonsTable extends Migration
{
    public function up()
    {
        Schema::create('hoadons', function (Blueprint $table) {
            $table->increments('SOHD');
            $table->dateTime('NGHD');
            $table->char('MANV', 4);
            $table->char('MABAN', 4);
            $table->decimal('TRIGIA', 10, 2);
            $table->foreign('MANV')->references('MANV')->on('nhanviens');
            $table->foreign('MABAN')->references('MABAN')->on('banans');
        });
    }

    public function down()
    {
        Schema::dropIfExists('hoadons');
    }
}

