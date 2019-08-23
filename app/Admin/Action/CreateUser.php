<?php
    /**
     *  Author: 张吉凯 <919342864@qq.com>
     *  Github: CrazyCodes <https://github.com/CrazyCodes>
     *  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
     */
    
    namespace App\Admin\Action;
    
    use App\Models\CityPackage;
    use App\Models\User;
    
    class CreateUser
    {
        public function execute($data)
        {
            $user       = new User();
            $user->tel  = $data['tel'];
            $user->data = json_encode($data);
            
            $prov = CityPackage::where('serial_no', $data['prov'])->value('name');
            $city = CityPackage::where('serial_no', $data['city'])->value('name');
            $area = CityPackage::where('serial_no', $data['area'])->value('name');
    
          
            $user->surname   = $data['surname'];
            $user->name      = $data['name'];
            $user->sex       = $data['sex'];
            $user->company   = $data['company'];
            $user->section   = $data['section'];
            $user->position  = $data['position'];
            $user->prov_name = $prov;
            $user->city_name = $city;
            $user->area_name = $area;
            $user->prov      = $data['prov'];
            $user->city      = $data['city'];
            $user->area      = $data['area'];
            $user->address   = $data['address'];
            $user->zip_code  = $data['zip_code'];
            $user->land_line = $data['land_line'];
            $user->fax       = $data['fax'];
            $user->email     = $data['email'];
            $user->website   = $data['website'];
            $user->save();
        }
    }
