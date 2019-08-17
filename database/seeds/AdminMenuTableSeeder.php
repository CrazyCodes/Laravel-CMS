<?php

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => '控制台',
                'icon' => 'fa-bar-chart',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-08-17 05:00:05',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 2,
                'title' => '系统设置',
                'icon' => 'fa-adn',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-08-12 14:52:34',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 3,
                'title' => '管理员列表',
                'icon' => 'fa-angle-double-right',
                'uri' => 'auth/users',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-08-12 14:51:19',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 4,
                'title' => '管理员权限组',
                'icon' => 'fa-angle-double-right',
                'uri' => 'auth/roles',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-08-12 14:51:44',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 5,
                'title' => '管理员权限',
                'icon' => 'fa-angle-double-right',
                'uri' => 'auth/permissions',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-08-12 14:51:38',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 6,
                'title' => '后台菜单设置',
                'icon' => 'fa-angle-double-right',
                'uri' => 'auth/menu',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-08-12 14:51:48',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 7,
                'title' => '后台操作日志',
                'icon' => 'fa-angle-double-right',
                'uri' => 'auth/logs',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-08-12 14:51:54',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 0,
                'title' => '网站设置',
                'icon' => 'fa-asterisk',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2019-08-12 14:53:19',
                'updated_at' => '2019-08-12 14:53:19',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 2,
                'order' => 0,
                'title' => '基本信息设置',
                'icon' => 'fa-angle-double-right',
                'uri' => '/system-configs',
                'permission' => NULL,
                'created_at' => '2019-08-12 14:53:48',
                'updated_at' => '2019-08-13 14:43:17',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 2,
                'order' => 0,
                'title' => '网站信息群组',
                'icon' => 'fa-angle-double-right',
                'uri' => 'system-config-groups',
                'permission' => NULL,
                'created_at' => '2019-08-12 15:08:16',
                'updated_at' => '2019-08-13 14:43:28',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'order' => 0,
                'title' => '列表资讯',
                'icon' => 'fa-align-left',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2019-08-12 16:27:24',
                'updated_at' => '2019-08-12 16:32:13',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 11,
                'order' => 0,
                'title' => '内容管理',
                'icon' => 'fa-angle-double-right',
                'uri' => 'articles',
                'permission' => NULL,
                'created_at' => '2019-08-12 16:27:38',
                'updated_at' => '2019-08-12 16:28:45',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 11,
                'order' => 0,
                'title' => '分类管理',
                'icon' => 'fa-angle-double-right',
                'uri' => 'article-categories',
                'permission' => NULL,
                'created_at' => '2019-08-12 16:29:02',
                'updated_at' => '2019-08-12 16:31:50',
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 0,
                'order' => 0,
                'title' => '图文管理',
                'icon' => 'fa-leanpub',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2019-08-12 16:32:50',
                'updated_at' => '2019-08-12 16:32:50',
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 14,
                'order' => 0,
                'title' => '类目管理',
                'icon' => 'fa-angle-double-right',
                'uri' => 'page-categories',
                'permission' => NULL,
                'created_at' => '2019-08-12 16:47:36',
                'updated_at' => '2019-08-12 16:47:36',
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 14,
                'order' => 0,
                'title' => '内容管理',
                'icon' => 'fa-angle-double-right',
                'uri' => 'pages',
                'permission' => NULL,
                'created_at' => '2019-08-12 16:47:52',
                'updated_at' => '2019-08-12 16:47:52',
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => 0,
                'order' => 0,
                'title' => '用户管理',
                'icon' => 'fa-users',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2019-08-12 16:50:03',
                'updated_at' => '2019-08-12 16:50:03',
            ),
            17 => 
            array (
                'id' => 18,
                'parent_id' => 0,
                'order' => 0,
                'title' => '展商管理',
                'icon' => 'fa-camera',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2019-08-12 16:50:41',
                'updated_at' => '2019-08-12 16:50:41',
            ),
            18 => 
            array (
                'id' => 19,
                'parent_id' => 8,
                'order' => 0,
                'title' => '网站菜单管理',
                'icon' => 'fa-angle-double-right',
                'uri' => 'navigations',
                'permission' => NULL,
                'created_at' => '2019-08-12 16:51:20',
                'updated_at' => '2019-08-13 03:20:50',
            ),
            19 => 
            array (
                'id' => 20,
                'parent_id' => 0,
                'order' => 0,
                'title' => '广告管理',
                'icon' => 'fa-buysellads',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2019-08-12 16:52:04',
                'updated_at' => '2019-08-12 16:52:04',
            ),
            20 => 
            array (
                'id' => 21,
                'parent_id' => 20,
                'order' => 0,
                'title' => '广告分类',
                'icon' => 'fa-angle-double-right',
                'uri' => 'advert-categories',
                'permission' => NULL,
                'created_at' => '2019-08-13 02:45:52',
                'updated_at' => '2019-08-15 10:19:23',
            ),
            21 => 
            array (
                'id' => 22,
                'parent_id' => 20,
                'order' => 0,
                'title' => '广告列表',
                'icon' => 'fa-angle-double-right',
                'uri' => 'adverts',
                'permission' => NULL,
                'created_at' => '2019-08-13 02:46:09',
                'updated_at' => '2019-08-15 10:18:52',
            ),
            22 => 
            array (
                'id' => 23,
                'parent_id' => 8,
                'order' => 0,
                'title' => '站点设置',
                'icon' => 'fa-angle-double-right',
                'uri' => 'sites',
                'permission' => NULL,
                'created_at' => '2019-08-13 02:51:11',
                'updated_at' => '2019-08-13 02:51:11',
            ),
            23 => 
            array (
                'id' => 24,
                'parent_id' => 20,
                'order' => 0,
                'title' => '友情链接',
                'icon' => 'fa-angle-double-right',
                'uri' => 'links',
                'permission' => NULL,
                'created_at' => '2019-08-13 03:05:25',
                'updated_at' => '2019-08-13 03:05:25',
            ),
            24 => 
            array (
                'id' => 25,
                'parent_id' => 8,
                'order' => 0,
                'title' => '网站基本设置',
                'icon' => 'fa-angle-double-right',
                'uri' => 'system-configs-setting',
                'permission' => NULL,
                'created_at' => '2019-08-13 06:22:38',
                'updated_at' => '2019-08-13 06:22:38',
            ),
            25 => 
            array (
                'id' => 26,
                'parent_id' => 27,
                'order' => 8,
                'title' => '系统日志管理',
                'icon' => 'fa-angle-double-right',
                'uri' => 'logs',
                'permission' => NULL,
                'created_at' => '2019-08-17 08:08:11',
                'updated_at' => '2019-08-17 08:09:41',
            ),
            26 => 
            array (
                'id' => 27,
                'parent_id' => 0,
                'order' => 0,
                'title' => '开发工具',
                'icon' => 'fa-file-code-o',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2019-08-17 08:09:12',
                'updated_at' => '2019-08-17 08:09:12',
            ),
            27 => 
            array (
                'id' => 28,
                'parent_id' => 27,
                'order' => 9,
                'title' => '文件浏览器',
                'icon' => 'fa-angle-double-right',
                'uri' => 'media',
                'permission' => NULL,
                'created_at' => '2019-08-17 08:10:54',
                'updated_at' => '2019-08-17 08:13:52',
            ),
            28 => 
            array (
                'id' => 31,
                'parent_id' => 17,
                'order' => 0,
                'title' => '报名用户列表',
                'icon' => 'fa-angle-double-right',
                'uri' => '/users',
                'permission' => NULL,
                'created_at' => '2019-08-17 10:50:44',
                'updated_at' => '2019-08-17 10:50:44',
            ),
            29 => 
            array (
                'id' => 32,
                'parent_id' => 17,
                'order' => 0,
                'title' => '团队报名列表',
                'icon' => 'fa-angle-double-right',
                'uri' => '/teams',
                'permission' => NULL,
                'created_at' => '2019-08-17 10:51:07',
                'updated_at' => '2019-08-17 10:51:07',
            ),
            30 => 
            array (
                'id' => 33,
                'parent_id' => 18,
                'order' => 0,
                'title' => '展商列表',
                'icon' => 'fa-angle-double-right',
                'uri' => '/shows',
                'permission' => NULL,
                'created_at' => '2019-08-17 10:52:00',
                'updated_at' => '2019-08-17 10:52:00',
            ),
            31 => 
            array (
                'id' => 34,
                'parent_id' => 18,
                'order' => 0,
                'title' => '展商报名列表',
                'icon' => 'fa-angle-double-right',
                'uri' => '/team_apply',
                'permission' => NULL,
                'created_at' => '2019-08-17 10:52:30',
                'updated_at' => '2019-08-17 10:52:49',
            ),
        ));
        
        
    }
}