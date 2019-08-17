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
                $table->text('data')->comment('报名信息');
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
