<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_id')->comment('类目编码');
            $table->string('title')->comment('图文标题');
            $table->string('color_val')->default('#000000')->comment('字体颜色');
            $table->integer('bold_val')->default(0)->comment('字体加粗 0不加粗');
            $table->string('source')->nullable()->comment('文章涞源');
            $table->string('author')->nullable()->comment('文章作者');
            $table->string('keywords')->nullable()->comment('关键字');
            $table->string('description')->nullable()->comment('摘要');
            $table->text('content')->nullable()->comment('文章内容');
            $table->string('pic_url')->nullable()->comment('缩略图片');
            $table->text('pic_arr')->nullable()->comment('组图');
            $table->integer('hits')->default(0)->comment('点击次数');
            $table->integer('sort')->default(0)->comment('排序');
            $table->softDeletes();
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
        Schema::dropIfExists('article');
    }
}
