<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use App\Http\Requests\StoreWorkerRequest;
use App\Http\Requests\UpdateWorkerRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Activity;

class WorkerController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $workers = Worker::all();
        return view('/work/all', ['workers' => $workers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        if ($request->activity != null) {
//            dd('CONTRLLER');
            $activity = $request->activity;
            $act = new Activity();
            $act->activity = $activity;
        } else {
            $activity = $request->activitySelect;
        }

        if ($this->authorize('create', Worker::class)) {
            $worker = new Worker;

            $worker->user_id = $request->user_id;
            $worker->date = $request->date;
            ;
            $worker->expl = $request->expl;
            $worker->wage = $request->wage;
            $worker->activity = $activity;
            $worker->location = $request->location;
            if ($worker->save()) {
                if (isset($act)) {
                    $act->save();
                }
            }

            return redirect('/worker/all');
        }
    }

    public function new() {

        $allUsers = User::all();
        $allActivity = Activity::all();
        return view('/work/create')->with(['allUsers' => $allUsers, 'allActivity' => $allActivity]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWorkerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkerRequest $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkerRequest  $request
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkerRequest $request, Worker $worker) {
        //
    }

    public function destroy($id) {
        $worker = Worker::find($id);
        $worker->delete();
        return redirect('/worker/all');
    }

}
