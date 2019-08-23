<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateIndustryTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('industry', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('site_id')->unsigned()->default(1)->comment('所属站点');
                $table->integer('parent_id')->default(0)->comment('父级编码');
                $table->string('name')->comment('名称');
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
            Schema::dropIfExists('industry');
        }
    }
