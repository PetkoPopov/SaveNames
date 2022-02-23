<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Names;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NamesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('names')->insert([
            'name' => Str::random(9),
            'explenation' => Str::random(3),
            'ocupation' => Str::random(3),
            'age' => rand(10, 29)
        ]);

        Names::factory()
                ->count(6)
                ->create();
    }

}
