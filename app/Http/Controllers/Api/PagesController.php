<?php

namespace App\Http\Controllers\Api;

use App\Interfaces\ConfigurationInterface;
use App\Models\Configuration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PagesController extends Controller
{
    protected $configurationRepository;

    public function __construct(ConfigurationInterface $configurationRepository)
    {
        $this->configurationRepository = $configurationRepository;
    }

    public function appaboutus(Request $request)
    {
        try {
            $about_us = Configuration::where('key', 'about_us')->firstOrFail();
            return array('status' => 1, 'message' => 'About us', 'data' => $about_us);
        } catch (\Exception $e) {
            return array('status' => 0, 'message' => $e->getMessage(), 'data' => []);
        }
    }


    public function appTerms(Request $request)
    {
        try {
            $about_us = Configuration::where('key', 'terms_and_conditions')->firstOrFail();
            return array('status' => 1, 'message' => 'About us', 'data' => $about_us);
        } catch (\Exception $e) {
            return array('status' => 0, 'message' => $e->getMessage(), 'data' => []);
        }
    }
}
