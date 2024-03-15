<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguyenlieusTable extends Migration
{
    public function up()
    {
        Schema::create('nguyenlieus', function (Blueprint $table) {
            $table->char('MANL', 4)->primary();
            $table->string('TENNL', 40);
            $table->string('DVT', 50);
            $table->string('LOAI', 50);
            $table->string('MOTA', 255);
            $table->decimal('GIA', 10, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('nguyenlieus');
    }
}

