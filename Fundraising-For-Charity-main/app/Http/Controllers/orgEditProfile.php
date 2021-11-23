<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\org;

class orgEditProfile extends Controller
{
    public function index(){
        return view('org.org_editProfile');
    }

    public function editPicture(){

    }

    public function update(Request $req){
        $name=$req->name;
        $email=$req->email;
        $gender=$req->gender;
        $address=$req->address;
        $phone=$req->phone;
        

        if($req->hasFile('profilePic')){
            $img=$req->file('profilePic');
            // echo $img->getClientOriginalName().'<br>';
            // echo $img->getClientOriginalExtension();
            // echo $img->getSize();

            $img->move('orgPic',date('d-m-Y-H-i').'.'.$img->getClientOriginalExtension());
            $picLocation='orgPic/'.date('d-m-Y-H-i').'.'.$img->getClientOriginalExtension();

            $id=$req->session()->get('id1');
            $org=org::find($id);
            $org->image=$picLocation;
            $org->save();
        }
        

        $id=$req->session()->get('id1');
        $org=org::find($id);

        $org->name=$name;
        $org->email=$email;
        $org->gender=$gender;
        $org->address=$address;
        $org->phone=$phone;

        $org->save();


        

        return redirect()->route('org.details');

    }
}
