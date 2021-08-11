<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\UpdateProfileRequest;
use App\Interfaces\Customer\AddressInterface;
use App\Interfaces\Customer\CustomerInterface;
use App\Models\Address;
use App\User;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    protected $customerRepository, $addressRepository;

    public function __construct(CustomerInterface $customerRepo,
                                AddressInterface $addressRepository)
    {
        $this->customerRepository = $customerRepo;
        $this->addressRepository = $addressRepository;
    }

    public function show()
    {
        $this->middleware = ['auth'];
        $user = auth()->user();
        return view('customer.pages.profile.index', compact('user'));
    }

    public function edit($id)
    {
        $user = User::with(['addresses', 'orders'])->findOrFail($id);
        return view('customer.pages.profile.edit', compact('user'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $this->customerRepository->updateProfile($request->except('user_email'), Auth::guard('web')->user()->user_id);
        /*$address = Address::where('user_id', Auth::guard('web')->user()->id)->first();
        $this->addressRepository->update($request->all(), $address->id);*/
        return redirect()->route('customer.profile.show')->with('success', 'Profile Updated Successfully');
    }
}
