<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('嘉宾姓名');
            $table->string('appellation')->comment('嘉宾称谓');
            $table->string('company')->comment('嘉宾公司');
            $table->string('cover')->comment('嘉宾封面');
            $table->text('data')->comment('嘉宾其他简介');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guest');
    }
}
