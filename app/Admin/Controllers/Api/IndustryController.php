<?php
    /**
     *  Author: 张吉凯 <919342864@qq.com>
     *  Github: CrazyCodes <https://github.com/CrazyCodes>
     *  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
     */
    
    namespace App\Admin\Controllers\Api;
    
    use App\Http\Controllers\Controller;
    use App\Models\CityPackage;
    use App\Models\Industry;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    
    class IndustryController extends Controller
    {
        public $request;
        
        public function __construct(Request $request)
        {
            $this->request = $request;
        }
        
        public function child()
        {
            $provinceId = $this->request->get('q');
            
            return Industry::where('parent_id', $provinceId)->get(['id', DB::raw('name as text')]);
        }
        
        public function city()
        {
            $provinceId = $this->request->get('q');
    
            return CityPackage::where('parent_id', $provinceId)->get([DB::raw('serial_no as id'), DB::raw('name as text')]);
        }
    }
