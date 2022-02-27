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
        Kw::factory(340)
                
                ->create();
    }
}
