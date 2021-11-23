<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\org;

class orgDetails extends Controller
{
    public function index(Request $req){
        $id=$req->session()->get('id1');
        $org=org::find($id);

        return view('org.org_details')->with('org', $org);
    }
}
