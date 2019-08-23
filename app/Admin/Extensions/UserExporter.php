<?php
    /**
     *  Author: 张吉凯 <919342864@qq.com>
     *  Github: CrazyCodes <https://github.com/CrazyCodes>
     *  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
     */
    
    namespace App\Admin\Extensions;
    
    use Encore\Admin\Grid\Exporters\ExcelExporter;
    
    class UserExporter extends ExcelExporter
    {
        protected $fileName = '用户报名清单.xlsx';
        
        protected $columns = [
            'id'         => '编码',
            'tel'        => '手机号',
            'created_at' => '报名时间',
        ];
        
        
    }
