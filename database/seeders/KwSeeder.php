<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kw;
class KwSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i =0 ; $i <35 ;$i++){
           
        Kw::factory(1)        
                ->create();
        }
    }
}
