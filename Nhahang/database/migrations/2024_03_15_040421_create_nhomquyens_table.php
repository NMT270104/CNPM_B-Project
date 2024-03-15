<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhomquyensTable extends Migration
{
    public function up()
    {
        Schema::create('nhomquyens', function (Blueprint $table) {
            $table->string('NHOM_ID')->primary();
            $table->char('MA', 4);
            $table->string('TEN');
        });
    }

    public function down()
    {
        Schema::dropIfExists('nhomquyens');
    }
}

