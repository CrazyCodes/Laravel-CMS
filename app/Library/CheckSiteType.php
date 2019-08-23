<?php
    /**
     *  Author: 张吉凯 <919342864@qq.com>
     *  Github: CrazyCodes <https://github.com/CrazyCodes>
     *  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
     */
    
    namespace App\Library;
    
    use App\Models\Site;
    
    class CheckSiteType
    {
        protected $actions = [
            'get',
        ];
        
        public function __call($name, $arguments)
        {
            if (!in_array($name, $this->actions)) {
                throw new \Exception(sprintf("error"));
            }
            
            return $this->{$name}($arguments);
        }
        
        protected function get()
        {
            return Site::where('status', '1')->value('id');
        }
    }
