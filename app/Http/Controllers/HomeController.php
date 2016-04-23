<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Illuminate\Support\Facades\Auth;
use App\T1;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }
    public function getlogin(){
    if(Auth::check())
    {
        return Redirect::to('dashboard');
    }
    else
    {
        return view('login');
    }  
    
    }

    public function postlogin(){
        
        if(Auth::attempt(['email'=>Input::get('email'),'password'=>Input::get('pass')])){
            if(Auth::check()){
                return Redirect::to('dashboard');
            }
        }
        else
        {
            return 'Login failed.';
        }
    }

    public function index(){
        if(Auth::check())
        {
            return view('welcome');
        }
        else
        {
            return 'not logged in!';
        }
    }

    public function getadd(){
        $ry = T1::all();
        return view('add')->with('v',$ry);
    }
    public function postadd(){
        if(Auth::check()){
        $email=Input::get('email');
        $name = Input::get('name');
        $nn = new T1;
        $nn->name=$name;
        $nn->email=$email;
        $nn->save();
        Session::flash('saved',1);
        return Redirect::to('add');
        }
        else
        {
            return 'not logged in!';
        }
    }
    public function getrud(){
        if(Auth::check())
        {  $ry = T1::all();
        return view('rud')->with('v',$ry);
        }
        else
        {
            return 'not logged in!';
        }
    }
    public function deleterecord($id){
        if(Auth::check())
        { $dq=T1::where('id','=',$id)->delete();
        Session::flash('ds',1);
        return Redirect::to('rud');}else{return 'not logged in!';}
    }
    public function viewrecord($id){
        if(Auth::check()){ $vq =T1::where('id','=',$id)->first();
        return view('details')->with('d',$vq);}else{return 'not logged in!';}
    }
    public function updaterecordg($id){
        if(Auth::check()){
        $vq =T1::where('id','=',$id)->first();
        return view('update')->with('r',$vq);}else{return 'not logged in!';}
    }
    public function updaterecordp($id){
        if(Auth::check()){ $up = T1::where('id','=',$id)->update(['name'=>Input::get('name'),'email'=>Input::get('email')]);
        Session::flash('u',1);
        return Redirect::to('update/'.$id);}else{return 'not logged in!';}
    }
}