<?php

namespace App\Http\Controllers\Admin;

use App\Interfaces\Admin\BannerInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class BannerController extends Controller
{
    protected $bannerRepository;

    public function __construct(BannerInterface $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }

    public function bannerlist(Request $request)
    {
        $title = "Home";
        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();

        $city = DB::table('banner')
            ->get();

        return view('admin.banner.bannerlist', compact('title', 'city', 'admin', 'logo'));
    }

    public function banner(Request $request)
    {
        $title = "Home";
        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();

        $city = DB::table('banner')
            ->get();

        return view('admin.banner.addbanner', compact('title', 'city', 'admin', 'logo'));


    }

    public function banneradd(Request $request)
    {
        $title = "Home";

        $banner = $request->banner;
        $image = $request->image;

        $this->validate($request, [
            'banner_name' => 'required',
            'banner_image' => 'required|mimes:jpeg,png,jpg|max:2048',
        ], [
            'banner.required' => 'Banner Name Required',
            'image.required' => 'Image Required',
        ]);

        if ($request->hasFile('banner_image')) {
            $image = $request->banner_image;
            $fileName = date('dmyhisa') . '-' . $image->getClientOriginalName();
            $fileName = str_replace(" ", "-", $fileName);
            $image->move(storage_path('app/public/images/banner/'), $fileName);
            $image = 'storage/images/banner/' . $fileName;
        } else {
            $image = 'N/A';
        }
        $requestData = $request->all();
        $requestData['banner_image'] = $image;
        $insert = $this->bannerRepository->store($requestData);
        if ($insert) {
            return redirect()->route('bannerlist')->with('success', 'Added Successfully');
        } else {
            return redirect()->back()->withErrors('Something Went Wrong');
        }

    }

    public function banneredit(Request $request)
    {
        $title = "Home";
        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $banner = $this->bannerRepository->getDetails($request->banner_id);
        return view('admin.banner.banneredit', compact('title', 'banner', 'admin', 'logo'));
    }

    public function bannerupdate(Request $request)
    {
        $this->validate(
            $request,
            [
                'banner_name' => 'required',
            ],
            [
                'banner_name.required' => 'Banner Name Required',
            ]
        );
        if (!is_null($request->route_name) && \Route::has($request->route_name)) {
            return redirect()->back()->withErrors('Route Name Not Exists.');
        }
        $getBanner = $this->bannerRepository->getDetails($request->banner_id);

        $image = $getBanner->banner_image;
        $requestData = $request->all();
        if ($request->hasFile('banner_image')) {
            if (file_exists($image)) {
                unlink($image);
            }
            $new_image = $request->banner_image;
            $fileName = date('dmyhisa') . '-' . $new_image->getClientOriginalName();
            $fileName = str_replace(" ", "-", $fileName);
            $new_image->move(storage_path('app/public/images/banner/'), $fileName);
            $requestData['banner_image'] = 'storage/images/banner/' . $fileName;
        } else {
            $requestData['banner_image'] = $getBanner->banner_image;
        }
        $insert = $this->bannerRepository->update($requestData, $request->banner_id);

        if ($insert) {
            return redirect()->route('bannerlist')->with('success', 'Updated Successfully');
        } else {
            return redirect()->back()->withErrors('Something Went Wrong');
        }

    }

    public function bannerdelete(Request $request)
    {
        $banner_id = $request->society_id;

        $delete = DB::table('banner')->where('banner_id', $banner_id)->delete();
        if ($delete) {
            return redirect()->back()->withSuccess('Deleted Successfully');
        } else {
            return redirect()->back()->withErrors('Something Went Wrong');
        }
    }
}
