<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud2;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Facade;

class Crud2Controller extends Controller
{
    //
    function index(){
        return view("index");
    }

    function create(){
        return view("create");
    }
    
    function store(Request $req){
        $req->validate(["username"=>"required","password"=>"required"]);
        $user = new crud2();
        $user->username=$req->Input("username");
        $user->password=$req->Input("password");
        $user->save();
    }

    function check(Request $req){
        // $results = crud2::select('select * from crud2s where username='.$req->username,[1]);
        // dd($results);
        // if(FacadesAuth::attempt($results)){
        //     return redirect()->route('dashboard');
   
        // }
        // else{
            
        //     dd("Unsuccessful login");
        // }

        $user=array("usname"=>$req->get("username"),"pass"=>$req->get("password"));
        // $data = new crud2();
        $var=crud2::all();
        $f=0;
        foreach ($var as $v){
            if($user["usname"]==$v->username && $user["pass"]==$v->password){
                $f=1;
                dd("login successful");
            }
         
        }
        if($f==1){
            dd("unsuccessful");
        }
    }
    // function dashboard(){
    //     return view('dashboard');
    // }

    function destroy(Request $req){
        $user=array("usname"=>$req->get("username"),"pass"=>$req->get("password"));
        // $data = new crud2();
        $var=crud2::all();
        $f=0;
        foreach ($var as $v){
            if($user["usname"]==$v->username && $user["pass"]==$v->password){
                $f=1;
                $res=crud2::where('username',$v->username)->delete();
                dd("deletion successful");
            }

        }
        if($f==1){
            dd("wrong credentials");
        }
    }
    function delete(){
        return view("delete");
    }

    function update1(){
        return view("update1");
    }
    function update(Request $req){
        $user=array("usname"=>$req->get("username"),"pass"=>$req->get("password"),"newpass"=>$req->get("newpassword"));
        // $data = new crud2();
        $var=crud2::all();
        $f=0;
        foreach ($var as $v){
            if($user["usname"]==$v->username && $user["pass"]==$v->password){
                crud2::where('username',$user["usname"] )
                    ->update(['password' => $user["newpass"]]);
                    $f=1;
                dd("updation successful");
            }
        
        }
        if($f==1){
            dd("wrong credentials");
        }
        
    }
}
