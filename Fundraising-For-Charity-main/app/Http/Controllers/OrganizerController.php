<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganizerController extends Controller
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

    public function nonOrganizerList(){
        $result = DB::select("SELECT userId, userName, email FROM users
                                    WHERE userId NOT IN (SELECT userId FROM EVENTS where status <> -1)
                                    AND type = 'user'");

        $data = json_decode(json_encode($result), true);
        return view('organizer.nonOrganizerList')->with('users', $data);
    }

    public function topOrganizerDetails(){
        $result = DB::select("SELECT SUM(raisedAmount) as raisedAmount, users.userId, userName, email, type, users.status
                                    FROM events, users
                                    WHERE users.userId = events.userId
                                    AND events.status = 0
                                    GROUP BY userId ORDER BY SUM(raisedAmount) DESC LIMIT 1");

        $data = json_decode(json_encode($result), true);
        return view('organizer.topOrganizerDetails')->with('users', $data);
    }

    public function organizerNumOfEvents(){
        $result = DB::select("SELECT COUNT(eventId) as numOfEvents, users.userId, email, userName
                                    FROM events, users WHERE events.status <> -1
                                    AND users.userId = events.userId GROUP by userId");

        $data = json_decode(json_encode($result), true);
        return view('organizer.numOfEvents')->with('users', $data);
    }

    public function organizerYearEventReport($id){
        $result = DB::select("SELECT sum(Amount) as totalAmount, Year(date) as date from eventdonations, events
                                    WHERE events.eventId = eventdonations.eventId
                                    and events.userId = $id GROUP BY year(date)");

        $data = json_decode(json_encode($result), true);
        return view('organizer.organizerYearlyReport')->with('report', $data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
