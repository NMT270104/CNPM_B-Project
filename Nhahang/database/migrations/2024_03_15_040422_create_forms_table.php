<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->string('FORM_ID')->primary();
            $table->string('TEN', 50);
            $table->string('MENUNAME');
            $table->string('VITRI');
        });
    }

    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
