<?php
    /**
     *  Author: 张吉凯 <919342864@qq.com>
     *  Github: CrazyCodes <https://github.com/CrazyCodes>
     *  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
     */
    
    namespace App\Admin\Repository;
    
    use App\Models\Site;
    
    class SiteRepository
    {
        public function get()
        {
            return Site::get();
        }
    }
