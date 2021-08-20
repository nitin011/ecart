<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\AddressUpdateRequest;
use App\Http\Requests\Customer\StoreAddressRequest;
use App\Interfaces\Customer\AddressInterface;
use App\Services\CityService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class AddressController extends Controller
{
    protected $addressRepository, $cityService;

    public function __construct(CityService $cityService, AddressInterface $addressRepository)
    {
        $this->cityService = $cityService;
        $this->addressRepository = $addressRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('redirect_to', Url::previous());
        return response()->view('web.pages.address.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = $this->cityService->getActive();
        return response()->view('customer.pages.address.create', compact('cities'));
    }

    public function store(StoreAddressRequest $request)
    {
        try {
            $requestData = $request->all();
            if (isset($request->id)) {
                $this->addressRepository->update($requestData, $request->id);
            }else{
                $this->addressRepository->create($requestData);
            }
            if (isset($requestData['redirect_to_checkout']) == 1) {
                return redirect()->route('customer.checkout.proceed')->with('success', 'Address Added successfully.');
            }
            if (Session::exists('redirect_to')) {
                $redirect_to = Session::get('redirect_to');
                Session::forget('redirect_to');
                return redirect($redirect_to)->with('success', 'New Address Added Successfully.');
            }
            return redirect()->route('customer.address.index')->with('success', 'Address Added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $address = $this->addressRepository->getById($id);
        $cities = $this->cityService->getActive();
        return response()->view('customer.pages.address.edit', compact('address', 'cities'));
    }

    public function update(AddressUpdateRequest $request, $id)
    {
        $requestData = $request->all();
        $requestData['user_id'] = auth()->guard('web')->user()->user_id;
        $this->addressRepository->update($requestData, $id);
        if (Session::exists('redirect_to')) {
            $redirect_to = Session::get('redirect_to');
            Session::forget('redirect_to');
            return redirect($redirect_to)->with('success', 'New Address Added Successfully.');
        }
        if (Session::exists('redirect_to')) {
            $redirect_to = Session::get('redirect_to');
            Session::forget('redirect_to');
            return redirect($redirect_to)->with('success', 'New Address Added Successfully.');
        }
        return redirect()->route('customer.address.index')->with('success', 'Address Updated successfully');
    }

    public function updateDefault($id)
    {
        $user_id = auth()->guard('web')->user()->user_id;
        $this->addressRepository->getByCustomerId($user_id)->update(['is_default' => 0]);
        $this->addressRepository->getById($id)->update(['is_default' => 1]);
        if (Session::exists('redirect_to')) {
            $redirect_to = Session::get('redirect_to');
            Session::forget('redirect_to');
            return redirect($redirect_to)->with('success', 'Address Updated Successfully.');
        }
        return redirect()->back()->with('success', 'Default Address Changed Successfully');
    }

    public function destroy($id)
    {
        $res = $this->addressRepository->delete($id);
        if (!$res['status']) {
            return redirect()->back()->with('error', $res['message']);
        }
        if (Session::exists('redirect_to')) {
            $redirect_to = Session::get('redirect_to');
            Session::forget('redirect_to');
            return redirect($redirect_to)->with('success', 'Address Deleted.');
        }
        return redirect()->route('customer.address.index')->with('success', 'Address Deleted Successfully');
    }
}
