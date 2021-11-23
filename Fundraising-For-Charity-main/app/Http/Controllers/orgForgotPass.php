<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use App\Models\org;
use App\Models\org_users;

class orgForgotPass extends Controller
{
    public function index(){
        return view('org.org_forgotpPass');
    }
    public function change(Request $req){

        $flag1=0;
        $flag2=0;

        $data=org::where('email', $req->mail)
                    ->get();

        if (count($data)>0) 
        {
            $id=$data[0]->id;

            $org=org::find($id);
            $org->password = $req->pass;
            $org->save();

            $flag1=1; 
        }

        $data2=org_users::where('email', $req->mail)
                    ->get();

        if (count($data2)>0) 
        {
            $userId=$data2[0]->userId;
            $org2=org_users::find($userId);
            $org2->password = $req->pass;
            $org2->save();

            $flag2=1; 
        }
        if($flag1==1 && $flag2==1){
            return redirect('/login');
        }
     }
}
