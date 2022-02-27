<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Names extends Model
{
    use HasFactory;
   
    public $timestamps = false ;
// Accessor  аксцесор се създава със get отпред и Attribute отзад   
      
//    public function getNameAttribute($value) {
//    Това е пример от youtube може също да се играе с данните $param
//        return $value." from Bulgaria";
//    }
//    public function getAgeAttribute($param) {
//    
//          return $param.( '___years old');
//        
//    }
    
}
