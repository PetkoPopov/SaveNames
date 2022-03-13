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
    private $length = 10;
    private $allNames = [];
    private $sortById;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page, $sortBy) {
        $sortByQuery = 'sortBy' . $sortBy;
        $sortStatus = DB::select("select $sortByQuery from namesave.sorts");
        $statusAsc = $sortStatus[0]->{$sortByQuery};
//        dump($sortStatus[0]);die;

        $names = DB::select("select * from namesave.names order by($sortBy)$statusAsc");
        foreach ($names as $n) {
            $allNames[] = $n;
        }


        $pages = ceil(count($allNames) / $this->length);
        $allNames = array_chunk($allNames, $this->length);

        return view('names')->with(['allNames' => $allNames[$page], "page" => $page, 'pages' => $pages, 'sortBy' => $sortBy]);
    }

    public function sortById() {
        $sort = Sort::find(1);
        $sortStatus = $sort->sortById;

        if ($sortStatus == "asc") {
            DB::select("update namesave.sorts set sortById='desc' where id=1");
        } else {
            DB::select("update namesave.sorts set sortById='asc' where id=1 ");
        }
        return redirect("/names/0/Id");
    }

    public function sortByAge() {

        $sort = Sort::find(1);
        $sortStatus = $sort->sortByAge;

        if ($sortStatus == "asc") {

            DB::select("update namesave.sorts set sortByAge='desc' where id=1");
        } else {
            DB::select("update namesave.sorts set sortByAge='asc' where id=1 ");
        }
        return redirect('names/0/Age');
    }

    public function sortByName() {

        $sort = Sort::find(1);
        $sortStatus = $sort->sortByName;
        // select * from namesave.names Order by('age') ASC DESC ;
        if ($sortStatus == "asc") {
            DB::select("update namesave.sorts set sortByName='desc' where id=1");
        } else {
            DB::select("update namesave.sorts set sortByName='asc' where id=1 ");
        }
       
        return redirect('/names/0/Name');
    }

    public function sortByOcupation() {
        $sort = Sort::find(1);
        $sortStatus = $sort->sortByOcupation;
        // select * from namesave.names Order by('age') ASC DESC ;
        if ($sortStatus == "asc") {
            DB::select("update namesave.sorts set sortByOcupation='desc' where id=1");
        } else {

            DB::select("update namesave.sorts set sortByOcupation='asc' where id=1 ");
        }

        return redirect('/names/0/Ocupation');
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
        $newName->ocupation = $request->ocupation;
        $newName->quote = $request->quote;
        $newName->age = $request->age;

//    dump($newName);die;
//    
//    DB::insert("insert into namesave.names (name,explenation,ocupation,quote,age) "
//            . "values('$newName->name' ,'$newName->explenation','$newName->ocupation','$newName->quote','$newName->age')");
//    
        $newName->save();
        return redirect('names/0');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNamesRequest  $request
     * @param  \App\Models\Names  $names
     * @return \Illuminate\Http\Response
     */
    public function updateForm($id) {
//        dump($req);die;
        $name = Names::find($id);

        return view('/update')->with(['name' => $name]);
    }

    public function updateName(\Illuminate\Http\Request $r) {
//        dump($r->id);die;
        $id = (int) $r->id;
//        dump($id);die;
//        DB::table('names')->select("update namesave.names set name=$r->name,ocupation= $r->ocupation,explenation=$r->explenation,age=$r->age"
//                . " where id=$id");
        $name = Names::find($id);
        $name->name = $r->name;
        $name->ocupation = $r->ocupation;
        $name->explenation = $r->explenation;
        $name->age = $r->age;

        $name->save();

        return redirect('/names/0');
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

    public function findById($id) {
        $name = Names::find($id);
        return view('byId')->with(['name' => $name]);
    }

    public function getAge() {
        $names = Names::all();
        foreach ($names as $name) {
            $allAge[] = $name->age;
        }
        return view('age')->with(['allAge' => $allAge]);
    }

}
