<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateAdvertTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('advert', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('site_id')->default(0)->comment('站点编码');
                $table->integer('category_id')->comment('类目编码');
                $table->string('title')->comment('广告标识');
                $table->integer('mode')->default(0)->comment('展示模式');
                $table->string('content')->comment('展示内容');
                $table->string('link_url')->nullable()->comment('跳转链接');
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
            Schema::dropIfExists('advert');
        }
    }
