$(document).ready(function () {
    $(document).on('click', '.add-single-item-in-cart', function () {
        console.log('class add-to-cart clicked');
        let variant_id = $(this).data('item-id');
        addToCart(variant_id);
    });
    $(document).on('click', '.shopping-cart-btn', function () {
        console.log('class shopping-cart-btn clicked');
        let quantity = $(this).closest('.bottom-product').find("input[name='quantity']").val();
        let variant_id = $(this).closest('.bottom-product').find("input[name='variant_id']").val();
        addToCart(variant_id, quantity);
    });
    $(document).on('click', '#dacib', function () {
        console.log('class #dacib clicked');
        let quantity = $('#dacib-quantity').val();
        let variant_id = $('#dacib-variant_id').val();
        addToCart(variant_id, quantity);
    });
    $(document).on('click', '.remove-cart-item', function () {
        console.log('class .remove-cart-item clicked');
        $(this).closest('tr').remove();
    });
});

function addToCart(variant_id, quantity = 1) {
    $.ajax({
        url: addToCartUrl,
        type: "GET",
        data: {
            variant_id: variant_id,
            quantity: quantity,
        },
        success: function (response) {
            ajax_alert = $('.ajax-alert');
            var cart_list_popup = $('#cart-list-popup');
            var mobile_cart_list_popup = $('#mobile-cart-list-popup');
            var cart_count = $('.cart-count');
            if (response.status) {
                cart_list_popup.html(response.data.cart_list_popup_html);
                mobile_cart_list_popup.html(response.data.mobile_cart_list_popup_html);
                cart_count.html(response.data.cart_count);
                itemAddedSwal(response.message)
            } else {
                ajax_alert.addClass('alert-warning');
                swal('error', response.message, 'error');
            }
        }
    });
}

function itemAddedSwal(message) {
    swal('success', message, 'success', {
        buttons: {
            basket: "Go to Basket",
            close: "Continue Shopping"
        }
    }).then((value) => {
        switch (value) {
            case 'basket':
                console.log('i am in');
                window.location.href = cartUrl;
                break;
            case 'close':
                return;
        }
    });
}

function deleteCartItem(variant_id, popup = false) {
    $.ajax({
        url: deleteCartItemUrl,
        type: "GET",
        data: {
            variant_id: variant_id,
            popup: popup
        },
        success: function (response) {
            var cart_list_popup = $('#cart-list-popup');
            var mobile_cart_list_popup = $('#mobile-cart-list-popup');
            var cart_count = $('.cart-count');
            if (response.status) {
                cart_list_popup.html(response.data.cart_list_popup_html);
                mobile_cart_list_popup.html(response.data.mobile_cart_list_popup_html);
                cart_count.html(response.data.cart_count);
                swal('success', response.message, 'success')
            } else {

                swal('error', response.message, 'error');
            }
        }
    });
}
