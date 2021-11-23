<?php

namespace App\Http\Controllers;

use App\Models\maneventmanage;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\event;
use Validator;

class ManeventmanageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\maneventmanage  $maneventmanage
     * @return \Illuminate\Http\Response
     */
    public function show(maneventmanage $maneventmanage)
    {
        $result = DB::select('SELECT * from events ');

        $events = json_decode(json_encode($result), true);

        return view('man_ev.man_eventslist')->with('events', $events);
    }
    public function Dashboard(maneventmanage $maneventmanage)
    {
        $result = DB::select('SELECT * from events where status<>"1"');

        $events = json_decode(json_encode($result), true);

        return view('manager.man_dashboard')->with('events', $events);
    }
    public function eventsinfo(maneventmanage $maneventmanage)
    {
        $result = DB::select('SELECT * from events where status<>"1"');
        $result2 = DB::select('SELECT * from events where status<>"0"');
        $inactive = json_decode(json_encode($result2), true);

        $active = json_decode(json_encode($result), true);

        return view('man_ev.man_eventdone')->with('active', $active)
                                            ->with('inactive',$inactive);
    }
    public function eventreport(event $req )
    {
        $id=$req->eventId;
        $result=events::find($id);
        $result->description=$req->description;
        $result->raisedAmount=$req->description;
        $result->save();
        return view('man_ev.man_details')->with('event',$result);


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\maneventmanage  $maneventmanage
     * @return \Illuminate\Http\Response
     */
    public function edit(maneventmanage $maneventmanage)
    {
        //
    }
    public function details($id)
    {
        $result=events::find($id);
        return view('man_ev.man_details')->with('event',$result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\maneventmanage  $maneventmanage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, maneventmanage $maneventmanage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\maneventmanage  $maneventmanage
     * @return \Illuminate\Http\Response
     */
    public function destroy(maneventmanage $maneventmanage)
    {
        //
    }
}
