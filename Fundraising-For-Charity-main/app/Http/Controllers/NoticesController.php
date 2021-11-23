<?php

namespace App\Http\Controllers;

use App\Models\notices;
use Illuminate\Http\Request;
use App\Http\Requests\Notice;

use Illuminate\Support\Facades\DB;

class NoticesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manager.man_notices');
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
    public function store(Notice $notice)
    {
        DB::insert("INSERT INTO notifications (title, message, userId, date)
                            VALUES ('$notice->title', '$notice->message', '$notice->userId','$notice->date' )");

        return view('manager.man_noticesposted')->with('title', $notice->title)
                                                ->with('message',$notice->message)
                                                ->with('userId',$notice->userId)
                                                ->with('date',$notice->date);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\notices  $notices
     * @return \Illuminate\Http\Response
     */
    public function show(notices $notices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notices  $notices
     * @return \Illuminate\Http\Response
     */
    public function edit(notices $notices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\notices  $notices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notices $notices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notices  $notices
     * @return \Illuminate\Http\Response
     */
    public function destroy(notices $notices)
    {
        //
    }
}
