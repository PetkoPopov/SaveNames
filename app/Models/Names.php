<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Names extends Model
{
    use HasFactory;
    public $name;
    public $timestamps = false ;
   // Accessor  аксцесор се създава със get отпред и Attribute отзад   
      public function getNameAttribute($value) {
        return $value." from Bulgaria";
    }
    public function getAgeAttribute($param) {
          return $param.( '___years old');
        
    }
}
