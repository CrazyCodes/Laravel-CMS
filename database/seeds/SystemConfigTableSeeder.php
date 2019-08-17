<?php

use Illuminate\Database\Seeder;

class SystemConfigTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('system_config')->delete();
        
        \DB::table('system_config')->insert(array (
            0 => 
            array (
                'id' => 1,
                'site_id' => 1,
                'var_name' => 'web_name',
                'var_info' => '网站名称',
                'var_group' => 1,
                'var_value' => 'The third global intelligent industry conference and expo 2019 & global chuangxin technology achievements transfer conference',
                'sort' => 2,
                'created_at' => '2019-08-12 15:10:27',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            1 => 
            array (
                'id' => 2,
                'site_id' => 1,
                'var_name' => 'web_url',
                'var_info' => '网站地址',
                'var_group' => 1,
                'var_value' => 'https://www.gcci.com',
                'sort' => 1,
                'created_at' => '2019-08-12 15:10:51',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            2 => 
            array (
                'id' => 3,
                'site_id' => 1,
                'var_name' => 'web_path',
                'var_info' => '网站目录',
                'var_group' => 1,
                'var_value' => NULL,
                'sort' => 1,
                'created_at' => '2019-08-12 15:15:03',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            3 => 
            array (
                'id' => 4,
                'site_id' => 1,
                'var_name' => 'author',
                'var_info' => '网站作者',
                'var_group' => 1,
                'var_value' => 'CrazyCodes',
                'sort' => 1,
                'created_at' => '2019-08-12 15:15:25',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            4 => 
            array (
                'id' => 5,
                'site_id' => 1,
                'var_name' => 'generator',
                'var_info' => '程序引擎',
                'var_group' => 1,
                'var_value' => 'Laravel CMS',
                'sort' => 1,
                'created_at' => '2019-08-12 15:15:49',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            5 => 
            array (
                'id' => 6,
                'site_id' => 1,
                'var_name' => 'seo_title',
                'var_info' => 'SEO标题',
                'var_group' => 1,
                'var_value' => 'The third global intelligent industry conference and expo 2019 & global chuangxin technology achievements transfer conference',
                'sort' => 1,
                'created_at' => '2019-08-12 15:16:09',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            6 => 
            array (
                'id' => 7,
                'site_id' => 1,
                'var_name' => 'keyword',
                'var_info' => '关键字设置',
                'var_group' => 1,
                'var_value' => 'The third global intelligent industry conference and expo 2019 & global chuangxin technology achievements transfer conference',
                'sort' => 1,
                'created_at' => '2019-08-12 15:30:53',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            7 => 
            array (
                'id' => 8,
                'site_id' => 1,
                'var_name' => 'description',
                'var_info' => '网站描述',
                'var_group' => 1,
                'var_value' => 'The third global intelligent industry conference and expo 2019 & global chuangxin technology achievements transfer conference',
                'sort' => 1,
                'created_at' => '2019-08-12 15:31:09',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            8 => 
            array (
                'id' => 9,
                'site_id' => 1,
                'var_name' => 'copyright',
                'var_info' => '版权信息',
                'var_group' => 1,
                'var_value' => 'The third global intelligent industry conference and expo 2019 & global chuangxin technology achievements transfer conference',
                'sort' => 1,
                'created_at' => '2019-08-12 15:31:25',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            9 => 
            array (
                'id' => 10,
                'site_id' => 1,
                'var_name' => 'icp',
                'var_info' => '备案编号',
                'var_group' => 1,
                'var_value' => NULL,
                'sort' => 1,
                'created_at' => '2019-08-12 15:31:43',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            10 => 
            array (
                'id' => 11,
                'site_id' => 1,
                'var_name' => 'upload_img_type',
                'var_info' => '上传图片类型',
                'var_group' => 2,
                'var_value' => 'gif|png|jpg|bmp',
                'sort' => 1,
                'created_at' => '2019-08-12 15:32:15',
                'updated_at' => '2019-08-13 11:19:01',
            ),
            11 => 
            array (
                'id' => 12,
                'site_id' => 1,
                'var_name' => 'upload_soft_type',
                'var_info' => '上传软件类型',
                'var_group' => 2,
                'var_value' => 'zip|gz|rar|iso|doc|xls|ppt|wps|txt',
                'sort' => 1,
                'created_at' => '2019-08-12 15:37:39',
                'updated_at' => '2019-08-13 11:19:01',
            ),
            12 => 
            array (
                'id' => 13,
                'site_id' => 1,
                'var_name' => 'upload_media_type',
                'var_info' => '上传媒体类型',
                'var_group' => 2,
                'var_value' => 'swf|flv|mpg|mp3|rm|rmvb|wmv|wma|wav',
                'sort' => 1,
                'created_at' => '2019-08-12 15:38:32',
                'updated_at' => '2019-08-13 11:19:01',
            ),
            13 => 
            array (
                'id' => 14,
                'site_id' => 1,
                'var_name' => 'max_file_size',
                'var_info' => '上传文件大小',
                'var_group' => 2,
                'var_value' => '2097152',
                'sort' => 1,
                'created_at' => '2019-08-12 15:39:08',
                'updated_at' => '2019-08-13 11:19:01',
            ),
            14 => 
            array (
                'id' => 15,
                'site_id' => 1,
                'var_name' => 'count_code',
                'var_info' => '流量统计代码',
                'var_group' => 2,
                'var_value' => NULL,
                'sort' => 1,
                'created_at' => '2019-08-12 15:39:29',
                'updated_at' => '2019-08-13 11:19:01',
            ),
            15 => 
            array (
                'id' => 16,
                'site_id' => 1,
                'var_name' => 'start_time',
                'var_info' => '大会开始时间',
                'var_group' => 1,
                'var_value' => NULL,
                'sort' => 0,
                'created_at' => '2019-08-12 16:48:38',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            16 => 
            array (
                'id' => 19,
                'site_id' => 2,
                'var_name' => 'web_name',
                'var_info' => '网站名称',
                'var_group' => 4,
                'var_value' => 'The third global intelligent industry conference and expo 2019 & global chuangxin technology achievements transfer conference',
                'sort' => 2,
                'created_at' => '2019-08-12 15:10:27',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            17 => 
            array (
                'id' => 20,
                'site_id' => 2,
                'var_name' => 'web_url',
                'var_info' => '网站地址',
                'var_group' => 4,
                'var_value' => 'https://www.gcci.com',
                'sort' => 1,
                'created_at' => '2019-08-12 15:10:51',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            18 => 
            array (
                'id' => 21,
                'site_id' => 2,
                'var_name' => 'web_path',
                'var_info' => '网站目录',
                'var_group' => 4,
                'var_value' => NULL,
                'sort' => 1,
                'created_at' => '2019-08-12 15:15:03',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            19 => 
            array (
                'id' => 22,
                'site_id' => 2,
                'var_name' => 'author',
                'var_info' => '网站作者',
                'var_group' => 4,
                'var_value' => 'CrazyCodes',
                'sort' => 1,
                'created_at' => '2019-08-12 15:15:25',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            20 => 
            array (
                'id' => 23,
                'site_id' => 2,
                'var_name' => 'generator',
                'var_info' => '程序引擎',
                'var_group' => 4,
                'var_value' => 'Laravel CMS',
                'sort' => 1,
                'created_at' => '2019-08-12 15:15:49',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            21 => 
            array (
                'id' => 24,
                'site_id' => 2,
                'var_name' => 'seo_title',
                'var_info' => 'SEO标题',
                'var_group' => 4,
                'var_value' => 'The third global intelligent industry conference and expo 2019 & global chuangxin technology achievements transfer conference',
                'sort' => 1,
                'created_at' => '2019-08-12 15:16:09',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            22 => 
            array (
                'id' => 25,
                'site_id' => 2,
                'var_name' => 'keyword',
                'var_info' => '关键字设置',
                'var_group' => 4,
                'var_value' => 'The third global intelligent industry conference and expo 2019 & global chuangxin technology achievements transfer conference',
                'sort' => 1,
                'created_at' => '2019-08-12 15:30:53',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            23 => 
            array (
                'id' => 26,
                'site_id' => 2,
                'var_name' => 'description',
                'var_info' => '网站描述',
                'var_group' => 4,
                'var_value' => 'The third global intelligent industry conference and expo 2019 & global chuangxin technology achievements transfer conference',
                'sort' => 1,
                'created_at' => '2019-08-12 15:31:09',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            24 => 
            array (
                'id' => 27,
                'site_id' => 2,
                'var_name' => 'copyright',
                'var_info' => '版权信息',
                'var_group' => 4,
                'var_value' => 'The third global intelligent industry conference and expo 2019 & global chuangxin technology achievements transfer conference',
                'sort' => 1,
                'created_at' => '2019-08-12 15:31:25',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            25 => 
            array (
                'id' => 28,
                'site_id' => 2,
                'var_name' => 'icp',
                'var_info' => '备案编号',
                'var_group' => 4,
                'var_value' => NULL,
                'sort' => 1,
                'created_at' => '2019-08-12 15:31:43',
                'updated_at' => '2019-08-13 14:49:05',
            ),
            26 => 
            array (
                'id' => 29,
                'site_id' => 2,
                'var_name' => 'upload_img_type',
                'var_info' => '上传图片类型',
                'var_group' => 5,
                'var_value' => 'gif|png|jpg|bmp',
                'sort' => 1,
                'created_at' => '2019-08-12 15:32:15',
                'updated_at' => '2019-08-13 11:19:01',
            ),
            27 => 
            array (
                'id' => 30,
                'site_id' => 2,
                'var_name' => 'upload_soft_type',
                'var_info' => '上传软件类型',
                'var_group' => 5,
                'var_value' => 'zip|gz|rar|iso|doc|xls|ppt|wps|txt',
                'sort' => 1,
                'created_at' => '2019-08-12 15:37:39',
                'updated_at' => '2019-08-13 11:19:01',
            ),
            28 => 
            array (
                'id' => 31,
                'site_id' => 2,
                'var_name' => 'upload_media_type',
                'var_info' => '上传媒体类型',
                'var_group' => 5,
                'var_value' => 'swf|flv|mpg|mp3|rm|rmvb|wmv|wma|wav',
                'sort' => 1,
                'created_at' => '2019-08-12 15:38:32',
                'updated_at' => '2019-08-13 11:19:01',
            ),
            29 => 
            array (
                'id' => 32,
                'site_id' => 2,
                'var_name' => 'max_file_size',
                'var_info' => '上传文件大小',
                'var_group' => 5,
                'var_value' => '2097152',
                'sort' => 1,
                'created_at' => '2019-08-12 15:39:08',
                'updated_at' => '2019-08-13 11:19:01',
            ),
            30 => 
            array (
                'id' => 33,
                'site_id' => 2,
                'var_name' => 'count_code',
                'var_info' => '流量统计代码',
                'var_group' => 5,
                'var_value' => NULL,
                'sort' => 1,
                'created_at' => '2019-08-12 15:39:29',
                'updated_at' => '2019-08-13 11:19:01',
            ),
            31 => 
            array (
                'id' => 34,
                'site_id' => 2,
                'var_name' => 'start_time',
                'var_info' => '大会开始时间',
                'var_group' => 4,
                'var_value' => NULL,
                'sort' => 0,
                'created_at' => '2019-08-12 16:48:38',
                'updated_at' => '2019-08-13 14:49:05',
            ),
        ));
        
        
    }
}