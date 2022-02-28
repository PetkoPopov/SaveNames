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
            $kwChunk[0] = $kw;
            $pages= 0;
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
    

/**
 * 
 * @param \Illuminate\Http\Request $request
 * @return string
 */
    public function calc(\Illuminate\Http\Request $request) {
              
         $date = $request->date;
        
         $todayId =DB::select("select id from namesave.kws where date= '$date'");
//dump($todayId);die;
        
         if(empty($todayId) ){
             return view('kw/showLastCalc')->with(['msg'=>'No Reccord That day']);
         }
         $kwT = DB::select("select * from namesave.kws where date='$date'");
         $kwToday= $kwT[0]->kw;
         echo'</br>'; 
         echo $id = $todayId[0]->id -1 ;
         echo'</br>';
         $prevDay = DB::select("select * from namesave.kws where id = '$id'");
//         dump($prevDay);die;
         $kwPrevDay = $prevDay[0]->kw;
         $total = $kwToday-$kwPrevDay ;
         $total = round($total, 2);
        
        return view('kw/showLastCalc')->with(['kwToday'=>$kwT,'prevDate'=>$prevDay , 'total'=>$total]);
        
    }
    
    
    public function calcForMonth(\Illuminate\Http\Request $request) {
        
        $month = $request->month ;
        $dateStart = $month.'-00';
        $parseMonth = explode('-', $month );
        list($year,$m)=$parseMonth;
        $m = (int)$m;
        $m +=1;
        if($m<=9){
            $m=(string)$m;
            $m= '0'.$m;
        }
        $dateEnd = $year.'-'.$m.'-00';
//        dump($dateEnd);die;
        $allForMonth = DB::select("select * from namesave.kws where date > '$dateStart' and date < '$dateEnd'");
        $allReccordsThatMonth= count($allForMonth);
        $totalKw = $allForMonth[$allReccordsThatMonth-1]->kw - $allForMonth[0]->kw;
        $totalKw =  round($totalKw,2);
        return view('kw/showForMonth')
              ->with(['dateEnd'=>$allForMonth[$allReccordsThatMonth-1] , 'dateStart'=>$allForMonth[0],'allForMonth'=>$allForMonth ,'month'=>$month,'total'=>$totalKw]);
        
    }
}
