<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateLinkTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('link', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('site_id')->default(0)->comment('站点编码');
                $table->string('name')->comment('网站名称');
                $table->string('note')->nullable()->comment('网站描述');
                $table->string('pic_url')->comment('图片');
                $table->string('link_url')->nullable()->comment('跳转链接');
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
            Schema::dropIfExists('link');
        }
    }
