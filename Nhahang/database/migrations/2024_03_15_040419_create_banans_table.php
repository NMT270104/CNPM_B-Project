<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanansTable extends Migration
{
    public function up()
    {
        Schema::create('banans', function (Blueprint $table) {
            $table->increments('MABAN');
            $table->string('SOBAN');
            $table->string('TRANGTHAI', 20);
            $table->integer('SONGUOI');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banans');
    }
}

