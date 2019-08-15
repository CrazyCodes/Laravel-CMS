<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class SystemConfigGroup extends Model
    {
        protected $table = 'system_config_group';
        
       
        
        public static function selectShow()
        {
            $data = [];
    
            $result = self::select('id', 'group_name')
                ->where('site_id',session()->get('site_id'))
                ->get();
    
            foreach ($result as $value) {
                $data[$value->id] = $value->group_name;
            }
    
            return $data;
        }
    
        
    }
