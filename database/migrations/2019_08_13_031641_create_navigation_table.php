<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateNavigationTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('navigation', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('site_id')->default(0)->comment('站点编码');
                $table->integer('parent_id')->default(0)->comment('父编码');
                $table->string('name')->comment('名称');
                $table->string('link_url')->comment('跳转链接');
                $table->string('target')->default('self')->comment('跳转方式');
                $table->integer('sort')->default(0)->comment('排序');
                $table->enum('status', [0, 1])->default(1)->comment('状态 1:启用');
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
            Schema::dropIfExists('navigation');
        }
    }
