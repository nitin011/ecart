<?php


namespace App\Repositories\Customer;


use App\Interfaces\ConfigurationInterface;
use App\Interfaces\Customer\CartInterface;
use App\Models\Coupon;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\CartCondition;
use Darryldecode\Cart\Exceptions\InvalidConditionException;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class CartRepository implements CartInterface
{

    protected $configurationRepository;

    public function __construct(ConfigurationInterface $configurationRepository)
    {
        $this->configurationRepository = $configurationRepository;
    }

    public function insert($product_variant, $quantity = 1)
    {
        // add the product to cart
        return \Cart::add(array(
            'id' => $product_variant->varient_id,
            'name' => $product_variant->product->product_name,
            'price' => $product_variant->price,
            'quantity' => $quantity,
            'attributes' => array(),
            'associatedModel' => $product_variant
        ));
    }

    public function tax()
    {
        /**
         * add single condition on a cart bases
         */
        try {
            if (\Cart::getContent()->count() > 0) {
                $vat = $this->configurationRepository->getDeliveryCharge();
                return new \Darryldecode\Cart\CartCondition(array(
                    'name' => $vat->title,
                    'type' => $vat->key,
                    'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
                    'value' => $vat->value,
                    'attributes' => array(
                        // attributes field is optional
                        'description' => $vat->description,
                        'more_data' => 'Vat Applied.'
                    )
                ));
            }
        } catch (InvalidConditionException $e) {
            throw $e;
        }
        return false;
    }

    public function deliveryCharge()
    {
        /**
         * add single condition on a cart bases
         */
        try {
            if (\Cart::getContent()->count() > 0) {
                $delivery_charge = $this->configurationRepository->getDeliveryCharge();
                \Cart::removeConditionsByType($delivery_charge->key);
                return new \Darryldecode\Cart\CartCondition(array(
                    'name' => $delivery_charge->title,
                    'type' => $delivery_charge->key,
                    'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
                    'value' => $delivery_charge->value,
                    'attributes' => array( // attributes field is optional
                        'description' => $delivery_charge->description,
                        'more_data' => 'Delivery Charges Applied.'
                    )
                ));
            }
        } catch (InvalidConditionException $e) {
            throw $e;
        }
        return false;
    }

    public function removeCoupon()
    {
        Session::forget('coupon');
    }

    public function applyCoupon(Coupon $coupon)
    {
        /**
         * add single condition on a cart bases
         */
        try {
            if (\Cart::getContent()->count() > 0) {
                Session::forget('coupon');
                $data = $coupon->toArray();
                $data['discount'] = $coupon->discount(\Cart::getSubTotal());
                Session::push('coupon', $data);
            }
        } catch (InvalidConditionException $e) {
            throw $e;
        }
        return false;
    }

    public function clearAllConditions(): void
    {
        /**
         * clears all conditions on a cart,
         * this does not remove conditions that has been added specifically to an item/product.
         * If you wish to remove a specific condition to a product, you may use the method: removeItemCondition($itemId,$conditionName)
         *
         * @return void
         */
        \Cart::clearCartConditions();
    }

    public function getConditionByType($type)
    {
        return \Cart::getConditionsByType($type);
    }

    public function removeConditionByType($type): bool
    {
        return \Cart::removeConditionsByType($type);
    }
}
