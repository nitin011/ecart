<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class PagesController extends Controller
{
    public function about_us(Request $request)
    {
        $title = "About Us";
         $email=Session::get('bamaAdmin');
    	 $admin= DB::table('admins')
    	 		   ->where('email',$email)
    	 		   ->first();
    	  $logo = DB::table('tbl_web_setting')
                ->where('set_id', '1')
                ->first();
          $check = DB::table('aboutuspage')
                ->first();
    	return view('admin.about_us', compact('title',"admin", "logo", "check"));
    }


     public function updateabout_us(Request $request)
    {
        $title="About Us";
        $description = $request->description;
         $check = DB::table('aboutuspage')
                ->first();

        if($check){
            $update = DB::table('aboutuspage')
                    ->update(['description'=>$description]);
        }
        else{
            $update = DB::table('aboutuspage')
                    ->insert(['title'=>$title,
                    'description'=>$description]);
        }
     if($update){
          return redirect()->back()->withSuccess('About-us Updated successfully');
     }
     else{
          return redirect()->back()->withErrors('something went wrong');
     }
    }

    public function terms(Request $request)
    {
        $title = "Terms & Condition";
         $email=Session::get('bamaAdmin');
    	 $admin= DB::table('admins')
    	 		   ->where('email',$email)
    	 		   ->first();
    	  $logo = DB::table('tbl_web_setting')
                ->where('set_id', '1')
                ->first();
          $check = DB::table('termspage')
                ->first();
    	return view('admin.terms', compact('title',"admin", "logo", "check"));
    }


     public function updateterms(Request $request)
    {
        $title="Terms & Condition";
        $description = $request->description;
         $check = DB::table('termspage')
                ->first();

        if($check){
            $update = DB::table('termspage')
                    ->update(['description'=>$description]);
        }
        else{
            $update = DB::table('termspage')
                    ->insert(['title'=>$title,
                    'description'=>$description]);
        }
     if($update){
          return redirect()->back()->withSuccess('Terms & Conditions Updated successfully');
     }
     else{
          return redirect()->back()->withErrors('something went wrong');
     }
    }
}
