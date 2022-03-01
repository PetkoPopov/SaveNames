<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
class KwFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
    $lastRecHlp = DB::select("select kw from namesave.kws order by(id)desc limit 1 ");
    $lastRec = $lastRecHlp[0]->kw; 
    
    $lastDateHlp = DB::select("select date from namesave.kws order by(date)desc limit 1");
    $lastDate = $lastDateHlp[0]->date;
    
    
    list($year,$month,$day)= explode('-',$lastDate);
    
    $nextYear = $year;
    $nextMonth = (int)$month;
    if($day<27){
        $nextDay = '28';
    }else{
        $nextDay = '05';
        $nextMonth = (int)$month+1;
    }
    if($nextMonth == 13 ){
        $nextMonth = '01';
        $nextYear = $year+1;
    }
    $nextDate = (string)$nextYear.'-'.(string)$nextMonth.'-'.(string)$nextDay;
//   dump($nextDate);die;
    return [
            'kw'=> $this->faker->randomFloat(3, $lastRec, $lastRec+30),
            'date'=>$this->faker->dateTimeBetween($lastDate, $nextDate)
        ];
    }
}
