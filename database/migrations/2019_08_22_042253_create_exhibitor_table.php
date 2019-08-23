<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateExhibitorTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('exhibitor', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('logo')->nullable()->comment('展商LOGO');
                $table->string('code')->nullable()->comment('展位号');
                $table->text('desc')->nullable()->comment('描述');
                $table->text('code_desc')->nullable()->comment('企业及服务描述');
                $table->text('b2b')->nullable()->comment('b2b商务洽谈描述');
                $table->string('name')->comment('展商姓名');
                $table->string('appellation')->nullable()->comment('称谓');
                $table->string('position')->nullable()->comment('职位');
                $table->string('department')->nullable()->comment('部门');
                $table->integer('zip_code')->unsigned()->default(0)->comment('邮编');
                $table->string('company')->nullable()->comment('公司名称');
                $table->string('address')->nullable()->comment('通讯地址');
                $table->string('prov_name')->nullable()->comment('省名称');
                $table->string('city_name')->nullable()->comment('市名称');
                $table->string('area_name')->nullable()->comment('区名称');
                $table->string('prov')->nullable()->comment('省编码');
                $table->string('city')->nullable()->comment('市编码');
                $table->string('area')->nullable()->comment('区编码');
                $table->string('tel')->nullable()->comment('联系电话');
                $table->string('fax')->nullable()->comment('传真');
                $table->string('phone')->nullable()->comment('手机号码');
                $table->string('email')->nullable()->comment('邮箱');
                $table->string('website')->nullable()->comment('网址');
                $table->text('product')->nullable()->comment('主要展示作品');
                $table->string('select')->nullable()->comment('展览方案');
                $table->string('proportion')->nullable()->comment('租用面积');
                $table->text('other')->nullable()->comment('留言');
                $table->tinyInteger('status')->default(0)->comment('状态 -1 审核失败 0 待审核 1 审核成功');
                $table->integer('sort')->unsigned()->default(0)->comment('排序');
                $table->timestamp('release_at')->nullable()->comment('发布时间');
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
            Schema::dropIfExists('exhibitor');
        }
    }
