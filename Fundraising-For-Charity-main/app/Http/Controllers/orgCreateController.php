<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createCampaign;
use App\Models\orgCampaign;

class orgCreateController extends Controller
{
    public function index(){
        return view('org.org_createCampaign');
    }

    public function add(createCampaign $req){

        if($req->hasFile('img')){
            $img=$req->file('img');

            $img->move('orgEvent',date('d-m-Y-H-i').'.'.$img->getClientOriginalExtension());
            $picLocation='orgEvent/'.date('d-m-Y-H-i').'.'.$img->getClientOriginalExtension();

            // $id=$req->session()->get('id1');
            // $org=org::find($id);
            $orgCampaign = new orgCampaign();
            $orgCampaign->image=$picLocation;
            $orgCampaign->title = $req->title;
            $orgCampaign->startDate = $req->sDate;
            $orgCampaign->endDate = $req->eDate;
            $orgCampaign->targetAmount = $req->rg;
            // $orgCampaign->image = $picLocation;
            $orgCampaign->description = $req->desc;
            $orgCampaign->status = -1;
            $orgCampaign->userID =  $req->session()->get('id2');
            $orgCampaign->save();
        }

        // // $orgCampaign = new orgCampaign();
        // $orgCampaign->title = $req->title;
        // $orgCampaign->startDate = $req->sDate;
        // $orgCampaign->endDate = $req->eDate;
        // $orgCampaign->targetAmount = $req->rg;
        // // $orgCampaign->image = $picLocation;
        // $orgCampaign->description = $req->desc;
        // $orgCampaign->status = -1;
        // $orgCampaign->userID =  $req->session()->get('id2');
        // // $orgCampaign->save();

        return redirect('/org/mycampaign');
    }
}
