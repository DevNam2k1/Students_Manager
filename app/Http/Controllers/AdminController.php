<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        } else {
            return Redirect::to('/login')->send();
        }
    }
    public function login(){
        return view('admin_login');
    }

    public function dashboard(){
        $this->AuthLogin();
        return view('admin_layout');
    }

    public function login_admin(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
    
        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
    
            return Redirect::to('/dashboard');
        } else {
            Session::put('message','Mật khẩu hoặc tài khoản bị sai. Vui lòng nhập lại');
            return Redirect::to('/login');
        }
    }

    public function logout_admin(){
        $this->AuthLogin();
         Session::put('admin_name',null);
         Session::put('admin_id',null);
         return Redirect::to('/login');
    }
}