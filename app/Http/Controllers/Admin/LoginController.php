<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;

class LoginController extends Controller
{
  public function adminLogin(Request $request)
  {
    if(Session::has('bamaAdmin')){
        return redirect()->route('admin.dashboard');
    }

    $logo = DB::table('tbl_web_setting')
                ->where('set_id', '1')
                ->first();

  	return view('admin.auth.login', compact('logo'));
  }

  public function adminLoginCheck(Request $request)
  {
  	$email = $request->email;
    $password = $request->password;

    $adminLoginCheck = DB::table('admins')
                      ->where('email',$email)
            			    ->first();

    if($adminLoginCheck){
      if (Hash::check($password, $adminLoginCheck->password)) {
        Session::put('bamaAdmin', $email);
        Session::save();
        return redirect()->route('admin.dashboard');
      }
      else{
        return redirect()->route('adminLogin')->withErrors('Wrong Password');
      }
    }
    else{
      return redirect()->route('adminLogin')->withErrors('Email/Password Wrong');
    }
  }


  public function logout(Request $request)
  {
 	Session::forget('bamaAdmin');
 	return redirect()->route('adminLogin')->withErrors("logged out.");
  }
}
