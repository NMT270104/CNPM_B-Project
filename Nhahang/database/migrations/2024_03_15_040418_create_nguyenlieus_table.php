<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguyenlieusTable extends Migration
{
    public function up()
    {
        Schema::create('nguyenlieus', function (Blueprint $table) {
            $table->increments('MANL');
            $table->string('TENNL');
            $table->string('DVT');
            $table->string('LOAI');
            $table->string('MOTA');
            $table->string('GIA');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nguyenlieus');
    }
}

