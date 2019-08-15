<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class ArticleCategory extends Model
    {
        protected $table = 'article_category';
    
        public static function selectShow()
        {
            $data = [];
        
            $result = self::select('id', 'name')
                ->where('site_id', session()->get('site_id'))
                ->get();

            foreach ($result as $value) {
                $data[$value->id] = $value->name;
            }

            return $data;
        }
    }
