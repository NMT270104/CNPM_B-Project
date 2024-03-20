<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaispsTable extends Migration
{
    public function up()
    {
        Schema::create('loaisps', function (Blueprint $table) {
            $table->increments('MALOAISP');
            $table->string('TENLOAISP');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loaisps');
    }
}

