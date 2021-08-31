<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\UpdateProfileRequest;
use App\Interfaces\Customer\AddressInterface;
use App\Interfaces\Customer\CartInterface;
use App\Interfaces\Customer\CustomerInterface;
use App\Interfaces\Customer\OrderInterface;
use App\Models\Address;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    protected $customerRepository, $addressRepository, $orderRepository, $cartRepository;

    public function __construct(CustomerInterface $customerRepo,
                                AddressInterface $addressRepository, OrderInterface $orderRepository, CartInterface $cartRepository)
    {
        $this->customerRepository = $customerRepo;
        $this->addressRepository = $addressRepository;
        $this->orderRepository = $orderRepository;
        $this->cartRepository = $cartRepository;
    }

    public function show()
    {
        $this->middleware = ['auth'];
        $user = auth()->user();
        $orders = $this->orderRepository->getAll(10);
        $addresses= $user->addresses;
        $coupon = (Session::exists('coupon')) ? Session::get('coupon')[0] : null;
        $delivery_charge = $this->cartRepository->deliveryCharge();
        return view('customer.pages.profile.index', compact('user', 'orders','addresses','coupon','delivery_charge'));
    }

    public function edit($id)
    {
        $user = User::with(['addresses', 'orders'])->findOrFail($id);
        return view('customer.pages.profile.edit', compact('user'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $user= \auth()->user();
        if (!Hash::check($request->c_password, $user->user_password)){
            return redirect()->back()->with('error','Current password is wrong');
        }
        $request->merge(['user_password'=> Hash::make($request->n_password)]);
        $this->customerRepository->updateProfile($request->except('user_email'), Auth::guard('web')->user()->user_id);
        /*$address = Address::where('user_id', Auth::guard('web')->user()->id)->first();
        $this->addressRepository->update($request->all(), $address->id);*/
        return redirect()->route('customer.profile.show')->with('success', 'Profile Updated Successfully');
    }
}
