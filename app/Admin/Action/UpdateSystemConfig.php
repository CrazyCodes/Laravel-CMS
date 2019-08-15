<?php
    /**
     *  Author: 张吉凯 <919342864@qq.com>
     *  Github: CrazyCodes <https://github.com/CrazyCodes>
     *  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
     */
    
    namespace App\Admin\Action;
    
    use App\Models\SystemConfig;
    
    class UpdateSystemConfig
    {
        public static function execute($data)
        {
            foreach ($data as $key => $value) {
                SystemConfig::where('var_name', $key)->update(['var_value' => $value]);
            }
        }
    }
