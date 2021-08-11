<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCountryRequest;
use App\Http\Requests\Admin\UpdateCountryRequest;
use App\Models\Country;
use App\Services\CountryService;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    protected CountryService $countryService;

    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }

    public function index()
    {
        $countries = $this->countryService->getActive()->map(function ($q) {
            $q->activeStatesOrProvinces = $q->statesOrProvinces ? $q->statesOrProvinces->where('status', 'active')->count() : 0;
            $q->activeCities = $q->cities ? $q->cities->where('status', 'active')->count() : 0;
            return $q;
        });
        return view('admin.countries.index', compact('countries'));
    }

    public function create()
    {
        $countryIdNames = $this->countryService->getCountryIdNames();
        return view('admin.countries.create', compact('countryIdNames'));
    }

    public function store(StoreCountryRequest $request)
    {
        $this->countryService->updateOrCreate($request->all());
        return redirect()->route('admin.countries.index')->with('success', 'Country Added successfully');
    }

    public function show($id)
    {
        $country = $this->countryService->getById($id);
        return view('admin.countries.show', compact('country'));
    }

    public function edit($id)
    {
        $country = $this->countryService->getById($id);
        $countryIdNames = $this->countryService->getCountryIdNames();
        return view('admin.countries.edit', compact('country', 'countryIdNames'));
    }

    public function update(UpdateCountryRequest $request, $id)
    {
        $this->countryService->updateOrCreate($request->all());
        return redirect()->route('admin.countries.index')->with('success', 'Country updated Successfully');
    }

    public function destroy($id)
    {
        $this->countryService->delete($id);
        return redirect()->route('admin.countries.index')->with('success', 'Country deleted Successfully');
    }
}
