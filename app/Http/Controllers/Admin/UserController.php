<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class UserController extends Controller
{
    public function list(Request $request)
    {
        if ($request->ajax()){
            //$query = NewsletterSubscribers::select(['id', 'email as text']);
            $query= User::select(['user_id as id', 'user_email as text'])->where(['status'=>1, 'block'=>0, 'is_verified'=>1])->orderBy('reg_date', 'desc');
            if ($request->filled('search')) {
                $query->where('user_email', 'LIKE', '%' . $request->input('search') . '%');
            }
            return $query->paginate(10)->toJson();
        }
        $users = DB::table('users')
            ->orderBy('reg_date', 'desc')
            ->paginate(20);
        return view('admin.user.list', compact("users"));
    }

    public function block(Request $request)
    {

        $user_id = $request->id;
        $users = DB::table('users')
            ->where('user_id', $user_id)
            ->update(['block' => 1]);
        if ($users) {
            return redirect()->back()->withSuccess('User Blocked Successfully');
        } else {
            return redirect()->back()->withErrors('Something Wents Wrong');
        }
    }

    public function unblock(Request $request)
    {

        $user_id = $request->id;
        $users = DB::table('users')
            ->where('user_id', $user_id)
            ->update(['block' => 2]);

        if ($users) {
            return redirect()->back()->withSuccess('User Unblocked Successfully');
        } else {
            return redirect()->back()->withErrors('Something Wents Wrong');
        }
    }
}
