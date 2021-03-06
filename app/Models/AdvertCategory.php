<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class AdvertCategory extends Model
    {
        protected $table = 'advert_category';
    
    
        public static function selectShow()
        {
            $data = [];
        
            $result = self::select('id', 'name')
                ->where('site_id', site()->get())
                ->get();
        
            foreach ($result as $value) {
                $data[$value->id] = $value->name;
            }
        
            return $data;
        }
       
    }
