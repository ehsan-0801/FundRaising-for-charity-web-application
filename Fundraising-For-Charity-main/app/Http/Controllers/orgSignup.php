<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use Validator;
use App\Models\org;
use App\Models\org_users;

class orgSignup extends Controller
{
    public function index()
    {
        return view("org.org_signup");
    }

    public function insert(userRequest $req)
    {
        $orgCheck = org_users::where('email', $req->mail)
                                ->get();
        if(count($orgCheck)>0){
            $req->session()->flash('msgSign','Already have an account !');
            return redirect('/signup') ->withInput();
        }
        else{
            $org = new org();
            $org->name = $req->name;
            $org->email = $req->mail;
            $org->gender = $req->flexRadioDefault;
            $org->address = $req->address;
            $org->phone = $req->phone;
            $org->password = $req->password;
            $org->image='asset/man.png';
            $org->save();
            
            $users = new org_users();
            $users->userName = $req->name;
            $users->email = $req->mail;
            $users->password = $req->password;
            $users->status = 1;
            $users->type = 'user';
            $users->save();

            return redirect('/login'); 
        }
        
    }

    public function verification(userRequest $req)
    {

    }
}
