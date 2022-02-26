<?php

namespace App\Http\Controllers;

use App\Models\Names;
use App\Http\Requests\StoreNamesRequest;
use App\Http\Requests\UpdateNamesRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Sort;
use Illuminate\Http\Client\Request;
use UI\Controls\Form;

class NamesController extends Controller {

    private $sortByOcupate = '';
    private $sortByAge = '';
    private $sortByName = '';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $names = Names::all();
        foreach ($names as $nameObject) {
            $allNames[] = $nameObject;
        }
        return view('names')->with(['allNames' => $allNames]);
    }

    public function getAge() {
        $names = Names::all();
        foreach ($names as $name) {
            $allAge[] = $name->age;
        }
        return view('age')->with(['age' => $allAge]);
    }

    public function sortById() {
        $sort = Sort::find(1);
        $sortStatus = $sort->sortById;
        // select * from namesave.names Order by('age') ASC DESC ;
        if ($sortStatus == "asc") {
            $names = DB::select('select * from namesave.names order by(id)');

            DB::select("update namesave.sorts set sortById='desc' where id=1");
        } else {
            $names = DB::select('select * from namesave.names order by(id) desc');
            DB::select("update namesave.sorts set sortById='asc' where id=1 ");
        }
        foreach ($names as $name) {
            $allNames[] = $name;
        }
        return view('names')->with(['allNames' => $allNames]);
    }

    public function sortByAge() {

        $sort = Sort::find(1);
        $sortStatus = $sort->sortByAge;
        // select * from namesave.names Order by('age') ASC DESC ;
        if ($sortStatus == "asc") {
            $names = DB::select('select * from namesave.names order by(age) asc');

            DB::select("update namesave.sorts set sortByAge='desc' where id=1");
        } else {
            $names = DB::select('select * from namesave.names order by(age) desc');
            DB::select("update namesave.sorts set sortByAge='asc' where id=1 ");
        }
        foreach ($names as $name) {
            $namesByAge[] = $name;
        }

        return view('names')->with(["allNames" => $namesByAge]);
    }

    public function sortByName() {

        $sort = Sort::find(1);
        $sortStatus = $sort->sortByName;
        // select * from namesave.names Order by('age') ASC DESC ;
        if ($sortStatus == "asc") {
            $names = DB::select('select * from namesave.names order by(name) asc');

            DB::select("update namesave.sorts set sortByName='desc' where id=1");
        } else {
            $names = DB::select('select * from namesave.names order by(name) desc');
            DB::select("update namesave.sorts set sortByName='asc' where id=1 ");
        }
        foreach ($names as $name) {
            $allNames[] = $name;
        }
        return view('names')->with(['allNames' => $allNames]);
    }

    public function sortByOcupation() {
        $sort = Sort::find(1);
        $sortStatus = $sort->sortByOcupation;
        // select * from namesave.names Order by('age') ASC DESC ;
        if ($sortStatus == "asc") {
            $names = DB::select('select * from namesave.names order by(ocupation) asc');

            DB::select("update namesave.sorts set sortByOcupation='desc' where id=1");
        } else {
            $names = DB::select('select * from namesave.names order by(ocupation) desc');
            DB::select("update namesave.sorts set sortByOcupation='asc' where id=1 ");
        }
        foreach ($names as $name) {
            $allNames[] = $name;
        }
        return view('names')->with(['allNames' => $allNames]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(\Illuminate\Http\Request $request) {

    $newName = new Names();
   
    $newName->name = $request->name;
    $newName->explenation = $request->explenation;
    $newName->ocupation=$request->ocupation;
    $newName->quote = $request->quote;
    $newName->age = $request->age;
    
//    dump($newName);die;
//    
//    DB::insert("insert into namesave.names (name,explenation,ocupation,quote,age) "
//            . "values('$newName->name' ,'$newName->explenation','$newName->ocupation','$newName->quote','$newName->age')");
//    
    $newName->save();
        return redirect('names');
    }

    
    
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNamesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNamesRequest $request) {
        //
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Names  $names
     * @return \Illuminate\Http\Response
     */
    public function edit(Names $names) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNamesRequest  $request
     * @param  \App\Models\Names  $names
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNamesRequest $request, Names $names) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Names  $names
     * @return \Illuminate\Http\Response
     */
    public function destroy(Names $names) {
        //
    }
    public function  findById($id) {
        $name = Names::find($id);
        return view('byId')->with(['name'=>$name]);
    }

}
