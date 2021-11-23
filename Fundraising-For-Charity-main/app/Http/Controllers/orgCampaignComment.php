<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\org_Comments;

class orgCampaignComment extends Controller
{
    public function insert(Request $req, $eId){
        $comment=$req->comment;

        $cmt = new org_Comments();
        $cmt->description= $comment;
        $cmt->eventId=$eId;
        $cmt->date=date('d-m-Y-H-i');
        $cmt->userId=$req->session()->get('id2');
        $cmt->save();


        return redirect('/campaignDetails/'.$eId);
    }
}
