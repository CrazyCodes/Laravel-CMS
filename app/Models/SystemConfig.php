<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class SystemConfig extends Model
    {
        public $table = 'system_config';
        
        public function group()
        {
            return $this->belongsTo(SystemConfigGroup::class,'var_group','id');
        }
    }
