<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateSiteTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('site', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name')->comment('站点名称');
                $table->string('key')->comment('站点标识');
                $table->string('lang')->comment('站点语言包');
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
            Schema::dropIfExists('site');
        }
    }
