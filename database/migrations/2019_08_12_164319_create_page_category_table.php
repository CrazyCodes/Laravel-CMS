<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parent_id')->default(0)->comment('父编码');
            $table->string('name')->comment('类目名称');
            $table->string('pic_url')->nullable()->comment('缩略图');
            $table->string('seo_title')->nullable()->comment('SEO标题');
            $table->string('keywords')->nullable()->comment('关键词');
            $table->string('description')->nullable()->comment('描述');
            $table->integer('sort')->default(0)->comment('排序');
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
        Schema::dropIfExists('page_category');
    }
}
