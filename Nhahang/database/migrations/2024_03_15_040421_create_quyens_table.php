<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuyensTable extends Migration
{
    public function up()
    {
        Schema::create('quyens', function (Blueprint $table) {
            $table->string('QUYEN_ID')->primary();
            $table->string('FORM_ID');
            $table->string('NHOM_ID');
            $table->foreign('FORM_ID')->references('FORM_ID')->on('forms');
            $table->foreign('NHOM_ID')->references('NHOM_ID')->on('nhomquyens');
        });
    }

    public function down()
    {
        Schema::dropIfExists('quyens');
    }
}

