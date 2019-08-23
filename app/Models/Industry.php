<?php
    
    namespace App\Models;
    
    use Encore\Admin\Traits\AdminBuilder;
    use Encore\Admin\Traits\ModelTree;
    use Illuminate\Database\Eloquent\Model;
    
    class Industry extends Model
    {
        use ModelTree, AdminBuilder;
        
        protected $table = 'industry';
        
        public function __construct(array $attributes = [])
        {
            $this->setParentColumn('parent_id');
            $this->setOrderColumn('sort');
            $this->setTitleColumn('name');
            
            parent::__construct($attributes);
        }
        
        public static function selectShow()
        {
            $data = [];
            
            $result = self::select('id', 'name')
                ->where('site_id', site()->get())
                ->where('parent_id', 0)
                ->orderBy('sort', 'desc')
                ->get();
            
            foreach ($result as $value) {
                $data[$value->id] = $value->name;
            }
            
            return $data;
        }
    
        public static function selectShowChild($id)
        {
            $data = [];
        
            $result = self::select('id', 'name')
                ->where('site_id', site()->get())
                ->where('parent_id', $id)
                ->orderBy('sort', 'desc')
                ->get();
        
            foreach ($result as $value) {
                $data[$value->id] = $value->name;
            }
        
            return $data;
        }
        
        
    }
