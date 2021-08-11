<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CityCreateOrUpdateRequest;
use App\Http\Requests\Admin\StoreStateRequest;
use App\Models\City;
use App\Services\CityService;
use App\Services\CountryService;
use App\Services\StateOrProvinceService;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    protected StateOrProvinceService $stateOrProvinceService;
    protected CountryService $countryService;
    protected CityService $cityService;

    public function __construct(CountryService $countryService, StateOrProvinceService $stateOrProvinceService, CityService $cityService)
    {
        $this->cityService = $cityService;
        $this->countryService = $countryService;
        $this->stateOrProvinceService = $stateOrProvinceService;
    }

    public function index()
    {
        $cities = $this->cityService->getActive();
        return view('admin.cities.index', compact('cities'));
    }

    public function create(Request $request)
    {
        $city = null;
        if (isset($request->id)) {
            $city = $this->cityService->getByIdWithTrashed($request->id);
        }
        $citiesIdName = $this->cityService->getIdNamesWithTrashed();
        $countryIdNames = $this->countryService->getActive()->pluck('name', 'id');
        $statesOrProvincesIdName = $this->stateOrProvinceService->getIdNamesWithTrashed();
        return view('admin.cities.create', compact('countryIdNames', 'statesOrProvincesIdName', 'citiesIdName', 'city'));
    }

    public function store(CityCreateOrUpdateRequest $request)
    {
        $this->cityService->updateOrCreate($request->all());
        return redirect()->route('admin.cities.index')->with('success', 'Data Updated successfully');
    }

    public function show($id)
    {
        $country = $this->stateOrProvinceService->getById($id);
        return view('admin.stateOrProvince.show', compact('country'));
    }

    public function edit($id)
    {
        $stateOrProvince = $this->stateOrProvinceService->getByIdWithTrashed($id);
        $statesOrProvincesIdName = $this->stateOrProvinceService->getIdNamesWithTrashed();
        $countryIdNames = $this->countryService->getCountryIdNames();
        return view('admin.stateOrProvince.edit', compact('stateOrProvince', 'statesOrProvincesIdName', 'countryIdNames'));
    }

    public function destroy($id)
    {
        $this->cityService->delete($id);
        return redirect()->route('admin.cities.index')->with('success', 'City deleted Successfully');
    }
}
