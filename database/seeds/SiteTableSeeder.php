<?php

use Illuminate\Database\Seeder;

class SiteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('site')->delete();
        
        \DB::table('site')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '中文站',
                'key' => 'zh_CN',
                'lang' => 'zh_CN',
                'created_at' => '2019-08-13 02:51:27',
                'updated_at' => '2019-08-13 02:51:27',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '英文站',
                'key' => 'zh_EN',
                'lang' => 'zh_EN',
                'created_at' => '2019-08-13 02:51:43',
                'updated_at' => '2019-08-13 02:51:43',
            ),
        ));
        
        
    }
}