<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlertSystemConfigGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('system_config_group', function (Blueprint $table) {
            $table->integer('site_id')->default(0)->after('id')->comment('站点编码');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('system_config_group', function (Blueprint $table) {
            $table->dropColumn('site_id');
        });
    }
}
