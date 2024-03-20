<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaispsTable extends Migration
{
    public function up()
    {
        Schema::create('loaisps', function (Blueprint $table) {
            $table->char('MALOAISP', 10)->primary();
            $table->string('TENLOAISP', 40);
        });
    }

    public function down()
    {
        Schema::dropIfExists('loaisps');
    }
}

