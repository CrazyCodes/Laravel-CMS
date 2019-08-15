<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advert_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('site_id')->default(0)->comment('站点编码');
            $table->string('name')->comment('广告位名称');
            $table->string('width')->comment('广告位宽度');
            $table->string('height')->comment('广告位高度');
            $table->integer('sort')->default(0)->comment('排序');
            $table->enum('status', [0, 1])->default(1)->comment('状态 1 显示');
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
        Schema::dropIfExists('advert_category');
    }
}
