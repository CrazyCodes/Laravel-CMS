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
                $table->integer('industry_id')->default(0)->unsigned()->after('website')->comment('所属行业');
                $table->integer('industry_option_id')->default(0)->unsigned()->after('industry_id')->comment('所属行业选项编码');
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
                $table->dropColumn('industry_id');
                $table->dropColumn('industry_option_id');
            });
        }
    }
