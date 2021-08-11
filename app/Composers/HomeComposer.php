<?php

namespace App\Composers;

use DB;
use Session;
use Hash;

class HomeComposer
{

    public function compose($view)
    {
        if(Session::has('bamaAdmin')){
        	$email = Session::get('bamaAdmin');

        	$admin = DB::table('admins')
        				->where('email', $email)
        				->first();

        	$web = DB::table('tbl_web_setting')
        			->get();

            //Add your variables

             $view->with('name', $admin->name)
                  ->with('image', $admin->image);
        }
    }
}
