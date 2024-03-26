<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamsTable extends Migration
{
    public function up()
    {
        Schema::create('sanphams', function (Blueprint $table) {
            $table->increments('MASP');
            $table->string('TENSP');
            $table->unsignedInteger('MALOAISP');   
            $table->string('DVT');
            $table->decimal('GIA');
            $table->string('MOTA');
            $table->string('IMAGE', 255);   
            $table->timestamps();
            $table->foreign('MALOAISP')->references('MALOAISP')->on('loaisps');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sanphams');
    }
}
