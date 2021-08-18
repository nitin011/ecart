<?php

namespace App\Http\Controllers\Customer;

use App\Interfaces\Customer\CartInterface;
use App\Interfaces\Customer\CouponInterface;
use App\Interfaces\Customer\ProductInterface;
use App\Interfaces\Customer\ProductVariantInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    protected $couponRepository, $cartRepository, $productRepository, $productVariantRepository;

    public function __construct(CouponInterface $couponRepository, CartInterface $cartRepository, ProductInterface $productRepository, ProductVariantInterface $productVariantRepository)
    {
        $this->couponRepository = $couponRepository;
        $this->productRepository = $productRepository;
        $this->productVariantRepository = $productVariantRepository;
        $this->cartRepository = $cartRepository;
    }

    public function index()
    {
        return view('customer.pages.cart');
    }

    public function insert(Request $request)
    {
        try {
            $variant = $this->productVariantRepository->getByIdWithProduct($request->variant_id);
            $this->cartRepository->insert($variant, $request->quantity);
            if ($request->ajax()) {
                return response()->json([
                    'status' => true,
                    'message' => 'Item Added in cart.',
                    'data' => [
                        'cart_items_html' => view('web.pages.cart.cart_product')->render(),
                        'cart_list_popup_html' => view('customer.layouts.globals.cart-list-popup')->render(),
                        'mobile_cart_list_popup_html' => view('customer.layouts.globals.mobile-cart-list-popup')->render(),
                        'cart_count' => \Cart::getContent()->count()
                    ]
                ]);
            }
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'status' => false,
                    'message' => $e->getMessage()
                ]);
            }
        }
        return Redirect::route('customer.cart.index')->with('success', 'Data Added Successfully.');
    }

    public function delete($rowId)
    {
        \Cart::remove($rowId);
        return redirect()->back()->with('success', 'Item Removed from cart.');
    }

    public function deleteItemAjax(Request $request)
    {
        try {
            \Cart::remove($request->variant_id);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
        return response()->json([
            'status' => true,
            'message' => 'Item Removed From cart.',
            'data' => [
                'cart_items_html' => view('web.pages.cart.cart_product')->render(),
                'cart_list_popup_html' => view('customer.layouts.globals.cart-list-popup')->render(),
                'mobile_cart_list_popup_html' => view('customer.layouts.globals.mobile-cart-list-popup')->render(),
                'cart_count' => \Cart::getContent()->count()
            ]
        ]);
    }

    /** Update the item on cart
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        try {
            $this->validate($request, [
                "quantity.*" => 'required|integer|min:1',
            ]);
            $items = \Cart::getContent();
            foreach ($items as $key => $item) {
                $variant = $this->productVariantRepository->getByIdWithProduct($item->id);
                \Cart::update($item->id, [
                    'name' => $variant->product->product_name,
                    'price' => $variant->price,
                    'quantity' => ($request['quantity'][$key] - $item['quantity']),
                    'attributes' => array(),
                    'associatedModel' => $variant
                ]);
            }
            return redirect()->back()->with('success', 'Cart Updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function applyCoupon(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|exists:coupon,coupon_code',
        ]);
        $coupon = $this->couponRepository->getByCouponCode($request->coupon_code);
        $this->cartRepository->applyCoupon($coupon);
        return redirect()->back()->with('success', 'Coupon Added Successfully.');
    }

    public function deleteCoupon()
    {
        $this->cartRepository->removeCoupon();
        return redirect()->back()->with('success', 'Coupon Removed Successfully.');
    }
}
