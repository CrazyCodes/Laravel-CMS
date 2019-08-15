<?php
    
    namespace App\Models;
    
    use Encore\Admin\Traits\AdminBuilder;
    use Encore\Admin\Traits\ModelTree;
    use Illuminate\Database\Eloquent\Model;
    
    class Navigation extends Model
    {
        use ModelTree, AdminBuilder;

        protected $table = 'navigation';

        public function __construct(array $attributes = [])
        {
            $this->setParentColumn('parent_id');
            $this->setOrderColumn('sort');
            $this->setTitleColumn('name');
            
            parent::__construct($attributes);
        }
    }
