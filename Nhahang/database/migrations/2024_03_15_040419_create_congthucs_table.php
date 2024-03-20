<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongthucsTable extends Migration
{
    public function up()
    {
        Schema::create('congthucs', function (Blueprint $table) {
            $table->char('MACT', 10)->primary();
            $table->char('MASP', 10);
            $table->char('MANL', 10);
            $table->integer('SL');
            $table->foreign('MASP')->references('MASP')->on('sanphams');
            $table->foreign('MANL')->references('MANL')->on('nguyenlieus');
        });
    }

    public function down()
    {
        Schema::dropIfExists('congthucs');
    }
}

