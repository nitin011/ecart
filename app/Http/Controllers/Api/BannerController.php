<?php

namespace App\Http\Controllers\Api;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BannerController extends Controller
{
    public function bannersList(Request $request)
    {
        try {
            $banners = Banner::get();
            if ($banners->isEmpty())
                throw new \Exception("No banners exists");
            return ['status' => 1, 'message' => 'Banner List', 'data' => $banners];
        } catch (\Exception $e) {
            return ['status' => 1, 'message' => $e->getMessage(), 'data' => []];
        }
    }

    public function promotionalBanners(Request $request)
    {
        try {
            $banner = Banner::where('type', 'promotional')->get();
            if ($banner->isEmpty()) {
                throw new \Exception('No Banner Found');
            }
            return ['status' => 1, 'message' => 'Promotional Banners List', 'data' => $banner];
        } catch (\Exception $e) {
            return ['status' => 0, 'message' => $e->getMessage(), 'data' => []];
        }
    }
}
