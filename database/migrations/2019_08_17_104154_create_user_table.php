<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateUserTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('user', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('tel')->comment('手机号码');
                $table->string('password')->nullable()->comment('密码');
                $table->string('surname')->nullable()->comment('姓名');
                $table->string('name')->nullable()->comment('姓名');
                $table->tinyInteger('sex')->unsigned()->default(0)->comment('称谓 0:先生 1:女士 2:小姐');
                $table->string('company')->nullable()->comment('公司名称');
                $table->string('section')->nullable()->comment('部门');
                $table->string('position')->nullable()->comment('职位');
                $table->string('prov_name')->nullable()->comment('省名称');
                $table->string('city_name')->nullable()->comment('市名称');
                $table->string('area_name')->nullable()->comment('区名称');
                $table->string('prov')->nullable()->comment('省编码');
                $table->string('city')->nullable()->comment('市编码');
                $table->string('area')->nullable()->comment('区编码');
                $table->string('address')->nullable()->comment('详细地址');
                $table->integer('zip_code')->nullable()->unsigned()->comment('邮编');
                $table->string('land_line')->nullable()->comment('座机电话');
                $table->string('fax')->nullable()->comment('传真号');
                $table->string('email')->nullable()->comment('邮箱');
                $table->string('website')->nullable()->comment('公司网址');
                $table->bigInteger('invite_code')->default(0)->comment('邀请码');
                $table->text('data')->nullable()->comment('报名信息');
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
            Schema::dropIfExists('user');
        }
    }
