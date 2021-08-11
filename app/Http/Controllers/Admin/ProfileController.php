<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use Session;
use Hash;

class ProfileController extends Controller
{
    public function adminProfile(Request $request)
    {
    	 $title = "Edit Profile";
    	 $email=Session::get('bamaAdmin');
    	 $admin= DB::table('admins')
    	 		   ->where('email',$email)
    	 		   ->first();
    	  $logo = DB::table('tbl_web_setting')
                ->where('set_id', '1')
                ->first();

           return view('admin.profile.profile',compact("email","admin",'logo',"title"));

    }


    public function adminUpdateProfile(Request $request)
    {
        $admin_id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $old_image = $request->old_image;
        $updated_at = date("d-m-y h:i a");
        $date=date('d-m-y');

        $this->validate(
            $request,
                [
                    'name' => 'required',
                    'email' => 'required'
                ],
                [
                    'name.required' => 'Enter your name.',
                    'email.required' => 'Enter new email.'
                ]
        );

        $getImage = DB::table('admins')
                        ->where('id', $admin_id)
                        ->first();

        $image = $getImage->image;

        if($request->hasFile('image')){
             if(file_exists($image)){
                unlink($image);
            }
            $image = $request->image;
            $fileName = date('dmyhisa').'-'.$image->getClientOriginalName();
            $fileName = str_replace(" ", "-", $fileName);
            $image->move(storage_path('app/public/images/admin/profile/').$date.'/', $fileName);
            $image = 'storage/images/admin/profile/'.$date.'/'.$fileName;
        }
        else{
            $image = $image;
        }

        $adminChangeProfile = DB::table('admins')
                                ->where('id', $admin_id)
                                ->update(['name'=>$name, 'email'=>$email,'image'=>$image]);

        if($adminChangeProfile){

             session::put('bamaAdmin',$email);

            return redirect()->back()->withSuccess('profile updated successfully');
        }
        else{
            return redirect()->back()->withErrors("Something Wents Wrong.");
        }
    }

    public function adminChangePass(Request $request)
    {
        $title = "Change Password";
         $email=Session::get('bamaAdmin');
    	 $admin= DB::table('admins')
    	 		   ->where('email',$email)
    	 		   ->first();
    	  $logo = DB::table('tbl_web_setting')
                ->where('set_id', '1')
                ->first();
           return view('admin.profile.change_pass',compact("email","admin","logo","title"));


    }


   public function adminChangePassword(Request $request)
    {
        $this->validate(
            $request,
                [
                    'current_pass' => 'required',
                    'new_pass' => 'required',
                ],
                [
                    'current_pass.required' => 'Enter current password.',
                    'new_pass.required' => 'Enter new password.',
                ]
           );

        $admin_id = $request->id;
        $current_pass = $request->current_pass;
        // $current_pass =Hash::make($current_pass1);
        $getAdmin = DB::table('admins')
                    ->where('id', $admin_id)
                    ->first();

        if(Hash::check($current_pass,$getAdmin->password))
            {
            $new_pass = Hash::make($request->new_pass);
            $updated_at = date("d-m-y h:i a");

            $adminChangePassword = DB::table('admins')
                                    ->where('id', $admin_id)
                                    ->update(['password'=>$new_pass]);

            if($adminChangePassword)
            {
                return redirect()->back()->withSuccess("password changed!");
            }
            else{
                return redirect()->back()->withErrors("something wents wrong.");
            }
        }
        else{
            return redirect()->back()->withErrors("current password does not match.");
        }
     }
     public function adminLogout(Request $request)
     {
          $request->session()->flush();
           return redirect()->route('adminlogin')->withSuccess("Logout Successfully");

     }
}

