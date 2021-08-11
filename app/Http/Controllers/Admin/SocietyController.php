<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Society;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class SocietyController extends Controller
{
    public function societylist(Request $request)
    {
        $title = "Home";
        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();

        $city = DB::table('society')
            ->join('city', 'society.city_id', '=', 'city.city_id')
            ->get();

        return view('admin.society.societylist', compact('title', 'city', 'logo', 'admin'));


    }

    public function society(Request $request)
    {
        $title = "Home";
        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();

        $city = DB::table('city')
            ->get();
        $map = config('services.gmap.key');
        return view('admin.society.societyadd', compact('title', 'city', 'admin', 'logo', 'map'));


    }

    public function societyadd(Request $request)
    {
        $society = $request->society;
        $city = $request->city;
        $this->validate($request, [
            'society' => 'required'
        ], [
                'society.required' => 'Society Name Required',
            ]
        );
        Society::query()->insert([
            'society_name' => $society,
            'city_id' => $city,
        ]);

        return redirect()->back()->with('success', 'Added Successfully');

    }

    public function societyedit(Request $request)
    {
        $cities = City::query()->get();
        $area = Society::query()->where('society_id', $request->society_id)->firstOrFail();
        $map = config('services.gmap.key');
        return view('admin.society.societyedit', compact('area', 'cities', 'map'));
    }

    public function societyupdate(Request $request,$id)
    {
        $this->validate(
            $request,
            [
                'society' => 'required',
            ],
            [
                'society.required' => 'Society Name Required',
            ]
        );

        $check = DB::table('society')
            ->where('society_id', $id)
            ->first();

        $insert = DB::table('society')
            ->where('society_id', $id)
            ->update([
                'society_name' => $request->society,
                'city_id' => $request->city,
            ]);
        if ($insert) {
            DB::table('addresses')
                ->where('society', $check->society_name)
                ->update(['society' => $request->society]);
            return redirect()->route('societylist')->withSuccess('Updated Successfully.');
        } else {
            return redirect()->back()->withErrors('Something went Wrong.');
        }
    }

    public function societydelete(Request $request)
    {

        $society_id = $request->society_id;

        $city = DB::table('society')
            ->where('society_id', $society_id)
            ->first();

        $delete = DB::table('society')->where('society_id', $request->society_id)->delete();
        if ($delete) {
            DB::table('addresses')
                ->where('society', $city->society_name)
                ->delete();
            return redirect()->back()->withSuccess('Deleted successfully');

        } else {
            return redirect()->back()->withErrors('Something Wents Wrong');
        }
    }
}
