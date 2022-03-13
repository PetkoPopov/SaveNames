<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
use Illuminate\Support\Facades\DB;
class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i =0 ; $i< 120 ;$i++){
            
            $car = new Car();
            $car->names_id = rand(1,70);
            $car->save();
        
            
        $rr= rand(1,78);
        $query = "insert into namesave.cars (names_id) values($rr)";
        dump($query);
        
        DB::select($query);
        }
        
        
        DB::table('namesave.cars')->insert([
           'names_id'=> rand(1,70) 
            
        ]);
        
        
        Car::factory(12)
                ->create();
        
        
    }
}
