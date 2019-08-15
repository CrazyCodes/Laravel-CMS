<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateSystemConfigTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('system_config', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('var_name')->comment('配置标示');
                $table->string('var_info')->comment('配置标题');
                $table->integer('var_group')->default(0)->comment('配置所属分组');
                $table->string('var_value')->nullable()->comment('配置值');
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
            Schema::dropIfExists('system_config');
        }
    }
