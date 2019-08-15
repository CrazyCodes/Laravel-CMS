<?php
    /**
     *  Author: 张吉凯 <919342864@qq.com>
     *  Github: CrazyCodes <https://github.com/CrazyCodes>
     *  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
     */
    
    namespace App\Admin\Module;
    
    use App\Models\SystemConfig;
    use App\Models\SystemConfigGroup;
    use Encore\Admin\Widgets\Tab;
    
    class Setting
    {
        public function init()
        {
            $group = $this->group();
            
            $tab = new Tab();
            
            foreach ($group as $value) {
                $config   = $this->config($value->id);
                $formData = [];
                foreach ($config as $option) {
                    $formData[$option->var_name] = $option['var_value'];
                }
                $form = new \Encore\Admin\Widgets\Form($formData);
                
                foreach ($config as $option) {
                    $form->text($option->var_name, $option->var_info);
                }
                
                $tab->add($value->group_name, $form->render());
            }
            
            return $tab->render();
        }
        
        private function group()
        {
            return SystemConfigGroup::where('site_id',session()->get('site_id'))->get();
        }
        
        private function config($configId)
        {
            return SystemConfig::where('var_group', $configId)->get();
        }
    }
