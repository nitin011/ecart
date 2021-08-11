<?php

namespace App\Http\Controllers\Admin;

use App\Interfaces\ImageInterface;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class SecondaryBannerController extends Controller
{

    protected $imageRepository;

    public function __construct(ImageInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function secbannerlist(Request $request)
    {
        $title = "Home";
        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();

        $banner = DB::table('secondary_banner')
            ->get();

        return view('admin.banner.secondarybannerlist', compact('title', 'banner', 'admin', 'logo'));


    }

    public function secbanner(Request $request)
    {
        $title = "Home";
        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();

        $banner = DB::table('secondary_banner')
            ->get();

        return view('admin.banner.secbanneradd', compact('title', 'banner', 'admin', 'logo'));


    }

    public function secbanneradd(Request $request)
    {
        $title = "Home";

        $banner = $request->banner;
        $image = $request->image;


        $this->validate(
            $request,
            [

                'banner' => 'required',
                'image' => 'required',
            ],
            [

                'banner.required' => 'Banner Name Required',
                'image.required' => 'Image Required',

            ]
        );

        if ($request->hasFile('image')) {
            $filename = $this->imageRepository->store($request->image, Banner::IMG_PATH);
            $image = Banner::IMG_URL . $filename;
        } else {
            $image = 'N/A';
        }
        $insert = DB::table('secondary_banner')
            ->insert([
                'banner_name' => $banner,
                'banner_image' => $image
            ]);

        return redirect()->back()->withSuccess('Added Successfully');

    }

    public function secbanneredit(Request $request)
    {
        $title = "Home";
        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $sec_banner_id = $request->sec_banner_id;

        $banner = DB::table('secondary_banner')
            ->where('sec_banner_id', $sec_banner_id)
            ->first();

        return view('admin.banner.secbanneredit', compact('title', 'banner', 'admin', 'logo'));


    }

    public function secbannerupdate(Request $request)
    {
        $title = "Home";
        $sec_banner_id = $request->sec_banner_id;
        $banner = $request->banner;
        $old_reward_image = $request->old_image;

        $this->validate(
            $request,
            [

                'banner' => 'required',
            ],
            [

                'banner.required' => 'Banner Name Required',

            ]
        );

        $getBanner = DB::table('secondary_banner')
            ->where('sec_banner_id', $sec_banner_id)
            ->first();

        $image = $getBanner->banner_image;


        if ($request->hasFile('image')) {
            if (file_exists($image)) {
                unlink($image);
            }
            $filename = $this->imageRepository->store($request->image, Banner::IMG_PATH);
            $new_image = Banner::IMG_URL . $filename;
        } else {
            $new_image = $getBanner->banner_image;
        }


        $insert = DB::table('secondary_banner')
            ->where('sec_banner_id', $sec_banner_id)
            ->update([
                'banner_name' => $banner,
                'banner_image' => $new_image,
            ]);

        return redirect()->back()->withSuccess('Updated Successfully');

    }

    public function secbannerdelete(Request $request)
    {

        $sec_banner_id = $request->sec_banner_id;

        $city = DB::table('secondary_banner')
            ->where('sec_banner_id', $sec_banner_id)
            ->first();

        $delete = DB::table('secondary_banner')->where('sec_banner_id', $request->sec_banner_id)->delete();
        if ($delete) {

            return redirect()->back()->withSuccess('Deleted Successfully');

        } else {
            return redirect()->back()->withErrors('Something Wents Wrong');
        }
    }
}
