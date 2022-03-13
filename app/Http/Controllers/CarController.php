<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Names;

class CarController extends Controller
{
    public function index() {

    $car= Car::find(12);

    $name = Names::find(12);
    dump($car->names_id);
    
    }
}
