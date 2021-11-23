<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orgCampaign;

class orgMycampaign extends Controller
{
    public function index(Request $req){
        $id=$req->session()->get('id2');

        $data=orgCampaign::where('userId', $id)
                            ->get();

        if (count($data)>0) {
            $req->session()->put('eId', $data[0]->eventId);
            $req->session()->put('title', $data[0]->title);
            $req->session()->put('sDate', $data[0]->startDate);
            $req->session()->put('eDate', $data[0]->endDate);
            $req->session()->put('desc', $data[0]->description);
            $req->session()->put('rg', $data[0]->targetAmount);
            $req->session()->put('raised', $data[0]->raisedAmount);
            $req->session()->put('eImg', $data[0]->image);
            if ($data[0]->status==-1) {
                $req->session()->put('status', 'Not Approved');
            }
            if ($data[0]->status==1) {
                $req->session()->put('status', 'Active');
            }
            if ($data[0]->status==0) {
                $req->session()->put('status', 'Event is finished');
            }
            if(!empty($data[1])){
                $req->session()->put('eId2', $data[1]->eventId);
                $req->session()->put('title2', $data[1]->title);
                $req->session()->put('sDate2', $data[1]->startDate);
                $req->session()->put('eDate2', $data[1]->endDate);
                $req->session()->put('desc2', $data[1]->description);
                $req->session()->put('rg2', $data[1]->targetAmount);
                $req->session()->put('raised2', $data[1]->raisedAmount);
                $req->session()->put('eImg2', $data[1]->image);
                // $req->session()->put('status2', $data[1]->status);
                if ($data[1]->status==-1) {
                    $req->session()->put('status2', 'Not Approved');
                }
                if ($data[1]->status==1) {
                    $req->session()->put('status2', 'Active');
                }
                if ($data[1]->status==0) {
                    $req->session()->put('status2', 'Event is finished');
                }
            }

            return view('org.org_Mycampaign');
        }
        else{
            return view('org.org_Mycampaign');
        }
    }

    public function delete($eventId){
        
            // echo $eventId;
            // $res=orgCampaign::where('eventId',$eventId)->delete();

            $orgC=orgCampaign::find($eventId);
            $orgC->status=0;
            $orgC->save();
            return redirect('/org_dashboard');
    }

    public function edit($eventId){
        echo $eventId;
        // // $res=orgCampaign::where('eventId',$eventId)->delete();
        // $orgC=orgCampaign::find($eventId);
        // $orgC->status=0;
        // $orgC->save();
        // return redirect('/org_dashboard');
}
}
