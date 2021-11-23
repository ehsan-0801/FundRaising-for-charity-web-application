<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\org_eventDonate;
use App\Models\orgCampaign;


class orgCampaignTran extends Controller
{
    public function index(){
        return view('org.org_tran');
    }
    public function sendMoney(Request $req, $eId){
        // echo $eId;
        // echo $req->amount;

        //$todayDate = date('Y-m-d');//changes made
        $donation = new org_eventDonate();
        $donation->eventId=$eId;
        $donation->Amount=$req->amount;
        $donation->date=date('d-m-Y-H-i');
        $donation->userId=$req->session()->get('id2');
        //$donation->date = $todayDate;//changes made
        $donation->save();

        $data=orgCampaign::find($eId);
        $data->raisedAmount+=$req->amount;
        $data->save();

        // $count = org_eventDonate::where('eventId', $eId)
        //                             ->get();
        // $donor= sizeof($count);
        return redirect('/org_dashboard');
    }
}
