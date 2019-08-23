<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class AlertUserTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::table('user', function (Blueprint $table) {
                $table->tinyInteger('channel')->default(0)->unsigned()->after('id')->comment('渠道 0 观众报名 1 团体报名');
            });
        }
        
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::table('user', function (Blueprint $table) {
                $table->dropColumn('channel');
            });
        }
    }
