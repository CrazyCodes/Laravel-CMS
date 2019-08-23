<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $table='questionnaire';
    
    public function getDataAttribute($extra)
    {
        return array_values(json_decode($extra, true) ?: []);
    }
    
    public function setDataAttribute($extra)
    {
        $this->attributes['data'] = json_encode(array_values($extra));
    }
}
