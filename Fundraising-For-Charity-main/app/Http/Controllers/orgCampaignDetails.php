<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orgCampaign;
use App\Models\org_Comments;
use App\Models\org_eventDonate;

class orgCampaignDetails extends Controller
{
    public function index($eId){

        $data=orgCampaign::find($eId); 

        $cmtRead =org_Comments::where('eventId', $eId)
                                ->get();     

        $donorNo=org_eventDonate::select('userId')->where('eventId',$eId)->get();

        // count($donorNo);
        // echo $donorNo->count();
        return view('org.org_CampaignDetails')->with('data', $data)
                                                ->with('cmt', $cmtRead)
                                                ->with('donorNo', $donorNo);
    }

    public function donor($eId){

        $donor=org_eventDonate::select('userId', 'Amount','date')->where('eventId',$eId)->get();
        return view('org.org_donorList')->with('donor', $donor);
    }
}
