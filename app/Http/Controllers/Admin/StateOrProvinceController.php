<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreStateRequest;
use App\Services\CountryService;
use App\Services\StateOrProvinceService;
use Illuminate\Http\Request;

class StateOrProvinceController extends Controller
{
    protected StateOrProvinceService $stateOrProvinceService;
    protected CountryService $countryService;

    public function __construct(CountryService $countryService, StateOrProvinceService $stateOrProvinceService)
    {
        $this->countryService = $countryService;
        $this->stateOrProvinceService = $stateOrProvinceService;
    }

    public function index()
    {
        $statesOrProvinces = $this->stateOrProvinceService->getActive()->map(function ($q) {
            $q->activeStatesOrProvinces = $q->statesOrProvinces ? $q->statesOrProvinces->where('status', 'active')->count() : 0;
            $q->activeCities = $q->statesCities ? $q->statesCities->where('status', 'active')->count() : 0;
            return $q;
        });
        return view('admin.stateOrProvince.index', compact('statesOrProvinces'));
    }

    public function create()
    {
        $countryIdNames = $this->countryService->getActive()->pluck('name', 'id');
        $statesOrProvincesIdName = $this->stateOrProvinceService->getIdNamesWithTrashed();
        return view('admin.stateOrProvince.create',compact('countryIdNames','statesOrProvincesIdName'));
    }

    public function store(StoreStateRequest $request)
    {
        $this->stateOrProvinceService->updateOrCreate($request->all());
        return redirect()->route('admin.stateOrProvince.index')->with('success', 'Country Added successfully');
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
        return view('admin.stateOrProvince.edit', compact('stateOrProvince', 'statesOrProvincesIdName','countryIdNames'));
    }

    public function update(Request $request, $id)
    {
        $this->stateOrProvinceService->updateOrCreate($request->all());
        return redirect()->route('admin.stateOrProvince.index')->with('success', 'Country updated Successfully');
    }

    public function destroy($id)
    {
        $this->stateOrProvinceService->delete($id);
        return redirect()->route('admin.stateOrProvince.index')->with('success', 'Country deleted Successfully');
    }
}
