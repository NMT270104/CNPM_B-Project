<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamsTable extends Migration
{
    public function up()
    {
        Schema::create('sanphams', function (Blueprint $table) {
            $table->char('MASP', 10)->primary();
            $table->string('TENSP', 40);
            $table->char('MALOAISP', 4);
            $table->string('DVT', 20);
            $table->decimal('GIA', 10, 2);
            $table->string('MOTA', 255);
            $table->string('IMAGE', 255);
            $table->foreign('MALOAISP')->references('MALOAISP')->on('loaisps');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sanphams');
    }
}
