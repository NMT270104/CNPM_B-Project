<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanansTable extends Migration
{
    public function up()
    {
        Schema::create('banans', function (Blueprint $table) {
            $table->char('MABAN', 4)->primary();
            $table->string('SOBAN', 40);
            $table->string('TRANGTHAI', 20);
            $table->integer('SONGUOI');
        });
    }

    public function down()
    {
        Schema::dropIfExists('banans');
    }
}
