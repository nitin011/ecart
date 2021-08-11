<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ConfigurationInterface;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    protected $configurationRepository;

    public function __construct(ConfigurationInterface $configurationRepository)
    {
        $this->configurationRepository = $configurationRepository;
    }

    public function index()
    {
        $settings = $this->configurationRepository->getAllConfigurations();
        return view('admin.configuration.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $this->configurationRepository->updateConfigurations($request);
        return redirect()->route('admin.configuration.index')->with('flash_message', 'Site Configuration Updated Successfully');
    }
}
