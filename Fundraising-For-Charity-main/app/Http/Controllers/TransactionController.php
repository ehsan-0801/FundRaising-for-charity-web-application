<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Transaction;
use App\Models\Transactions;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //following line will return a class.
        $row = DB::select("SELECT * FROM transactions where date>now() - interval 1 month");

        /*Following line will convert the std class to associative array*/
        $data = json_decode(json_encode($row), TRUE);
        return view('manager.man_monthlyCalculation')->with('results', $data);
    }
    public function index2()
    {
        //following line will return a class.
        $row = DB::select("SELECT * FROM transactions where date>now() - interval 12 month");

        /*Following line will convert the std class to associative array*/
        $data = json_decode(json_encode($row), TRUE);
        return view('manager.man_yearlyCalculation')->with('results', $data);
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
        $result=transactions::find($id);
        return view('manager.man_monthlyCalcUpdate')->with('result',$result);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Transaction $request, $id)
    {
        $result=transactions::find($id);
        $result->totalAmount=$request->totalAmount;
        $result->commissionAmount=$request->commissionAmount;
        $result->date=$request->date;
        $result->save();
        return view('manager.man_monthlyCalcUpdate')->with('result',$result);
    }
    public function edit2($id)
    {
        $result=transactions::find($id);
        return view('manager.man_yearlyCalcUpdate')->with('result',$result);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2(Transaction $request, $id)
    {
        $result=transactions::find($id);
        $result->totalAmount=$request->totalAmount;
        $result->commissionAmount=$request->commissionAmount;
        $result->date=$request->date;
        $result->save();
        return view('manager.man_yearlyCalcUpdate')->with('result',$result);
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
