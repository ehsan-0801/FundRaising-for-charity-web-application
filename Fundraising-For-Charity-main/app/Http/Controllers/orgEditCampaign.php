<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orgCampaign;
use App\Http\Requests\createCampaign;

class orgEditCampaign extends Controller
{
    public function index($eId){
        $data=orgCampaign::find($eId);
        return view('org.org_editCampaign')->with('event', $data);
    }

    public function update(createCampaign $req, $eId){
        // echo $eId;
        $event=orgCampaign::find($eId);
        $event->title=$req->title;
        $event->startDate=$req->sDate;
        $event->endDate=$req->eDate;
        $event->targetAmount=$req->rg;
        $event->description=$req->desc;
        $event->save();

        return redirect('/org/mycampaign');
    }
}
