<?php

namespace App\Http\Controllers;

use App\Models\Kw;
use App\Http\Requests\StoreKwRequest;
use Illuminate\Support\Facades\DB;

class KwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=0)
    {
        $pageContinity=100;
        $kw = Kw::all();
//        dump($kw->getIterator('items')->getArrayCopy());die;
        $count  = count($kw);

        if($count>100){
            $pages = ceil($count/100);
            $kwChunk = array_chunk($kw->getIterator('items')->getArrayCopy(), $pageContinity /*number of pages*/);
//            dump($kwChunk);die;
        }else{
            
        }

        return view('Kw/showKw')->with(['kwChunk'=>$kwChunk,'pages'=>$pages,'pageNumber'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $kw = new Kw();
        $kw->kw=$request->kw;
        $kw->date=$request->date;
        $kw->save();
        return redirect('kw/0');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kw  $kw
     * @return \Illuminate\Http\Response
     */
    public function show(Kw $kw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kw  $kw
     * @return \Illuminate\Http\Response
     */
    public function edit(Kw $kw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKwRequest  $request
     * @param  \App\Models\Kw  $kw
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKwRequest $request, Kw $kw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kw  $kw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kw $kw)
    {
        //
    }
    
    public function calc(\Illuminate\Http\Request $request) {
        
         $date = $request->date;

         $todayId =DB::select("select id from namesave.kws where date= '$date'");
         $kwT = DB::select("select * from namesave.kws where date='$date'");
         $kwToday= $kwT[0]->kw;
         echo'</br>'; 
         echo $id = $todayId[0]->id -1 ;
         echo'</br>';
         $prevDay = DB::select("select * from namesave.kws where id = '$id'");
//         dump($prevDay);die;
         $kwPrevDay = $prevDay[0]->kw;
         $total = $kwToday-$kwPrevDay ;
        
        return view('kw/showLastCalc')->with(['kwToday'=>$kwT,'prevDate'=>$prevDay , 'total'=>$total]);
        
    }
}
