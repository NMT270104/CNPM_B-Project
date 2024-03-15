<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanviensTable extends Migration
{
    public function up()
    {
        Schema::create('nhanviens', function (Blueprint $table) {
            $table->char('MANV', 4)->primary();
            $table->string('NHOM_ID');
            $table->string('HOTEN', 40);
            $table->string('SDT', 20);
            $table->dateTime('NGVL');
            $table->string('MATKHAU', 50);
            $table->string('CHUCVU', 50);
            $table->foreign('NHOM_ID')->references('NHOM_ID')->on('nhomquyens');
        });
    }

    public function down()
    {
        Schema::dropIfExists('nhanviens');
    }
}

