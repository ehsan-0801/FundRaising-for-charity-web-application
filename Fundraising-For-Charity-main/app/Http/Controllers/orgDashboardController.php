<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orgCampaign;
use App\Models\org_users;
use App\Models\org_eventDonate;

class orgDashboardController extends Controller
{
    public function index(Request $req)
    {
        $data=orgCampaign::all();
            // print_r($data[0]->title);


        return view('org.org_dashboard')->with('eventList', $data);
    }

    public function search(Request $req){
        $data2=orgCampaign::where('title', $req->search)
                            ->get();

        return view('org.org_dashboard')->with('eventList', $data2);
    }
}
