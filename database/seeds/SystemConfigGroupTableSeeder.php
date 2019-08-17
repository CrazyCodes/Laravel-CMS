<?php

use Illuminate\Database\Seeder;

class SystemConfigGroupTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('system_config_group')->delete();
        
        \DB::table('system_config_group')->insert(array (
            0 => 
            array (
                'id' => 1,
                'site_id' => 1,
                'group_name' => '基本信息',
                'sort' => 1,
                'created_at' => '2019-08-12 15:08:31',
                'updated_at' => '2019-08-13 15:45:54',
            ),
            1 => 
            array (
                'id' => 2,
                'site_id' => 1,
                'group_name' => '附件设置',
                'sort' => 1,
                'created_at' => '2019-08-12 15:09:19',
                'updated_at' => '2019-08-12 15:09:19',
            ),
            2 => 
            array (
                'id' => 4,
                'site_id' => 2,
                'group_name' => '基本信息',
                'sort' => 0,
                'created_at' => '2019-08-13 14:36:45',
                'updated_at' => '2019-08-13 14:36:45',
            ),
            3 => 
            array (
                'id' => 5,
                'site_id' => 2,
                'group_name' => '附件设置',
                'sort' => 0,
                'created_at' => '2019-08-13 14:48:06',
                'updated_at' => '2019-08-13 14:48:06',
            ),
        ));
        
        
    }
}