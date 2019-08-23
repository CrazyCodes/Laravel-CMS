<?php
    
    namespace App\Models;
    
    use App\UserSign;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;
    
    class User extends Model
    {
        protected $table = 'user';
        
        
        public function sign()
        {
            return $this->belongsTo(UserSign::class, 'id', 'user_id');
        }
        
        public static function selectShow()
        {
            $data = [];
            
            $result = self::select('id',
                DB::raw('CONCAT(tel,"-",surname,name) as name')
            )->where([
                ['channel', '=', 1],
                ['invite_code', '=', 0],
            ])->get();
            
            $data[0] = '请选择';
            
            foreach ($result as $value) {
                $data[$value->id] = $value->name;
            }
            
            return $data;
        }
    }
