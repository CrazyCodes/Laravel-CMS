<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class CityPackage extends Model
    {
        protected $table = 'city_package';
        
        public static function selectShow()
        {
            $data = [];
            
            $result = self::select('serial_no as id', 'name')
                ->where('parent_id', 0)
                ->get();
            
            foreach ($result as $value) {
                $data[$value->id] = $value->name;
            }
            
            return $data;
        }
        
        public static function selectShowChild($id)
        {
            $data = [];
            
            $result = self::select('serial_no as id', 'name')
                ->where('parent_id',$id)
                ->get();
            
            foreach ($result as $value) {
                $data[$value->id] = $value->name;
            }

            return $data;
        }
    }
