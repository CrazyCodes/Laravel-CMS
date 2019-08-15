<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Article extends Model
    {
        protected $table = 'article';
    
        public function setPicArrAttribute($pictures)
        {
            if (is_array($pictures)) {
                $this->attributes['pic_arr'] = json_encode($pictures);
            }
        }
    
        public function getPicArrAttribute($pictures)
        {
            return json_decode($pictures, true);
        }
    
        
    }
