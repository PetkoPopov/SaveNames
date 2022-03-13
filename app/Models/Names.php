<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
class Names extends Model
{
    use HasFactory;
   protected $table = 'names';
   protected $primeryKey = 'id';
   //описваме колоните на таблицата 
   protected $fillable=['name','explenation','ocupation','quote','age'];
    public $timestamps = false ;

    public function getCars() {
        return $this->hasMany(Car::class);
    }
    
}
