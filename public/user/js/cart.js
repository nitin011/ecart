$(document).ready(function () {
    $(document).on('click', '.add-to-cart', function () {
        let formData = $(this).closest('form').serialize();
        $.ajax({
            url: addToCartUrl,
            method:'post',
            data: formData,
            success:function (res) {
                if (res.status){
                    $("#cart-products-count").text(res.data.cart_count);
                    $("#cart-content").html(res.data.cart_items_html);
                }else{

                }
            }
        });

    });

    $(document).on('click', '.remove-item',function () {
        let id= $(this).data('id');
        let popup= true;
        $.ajax({
            url: deleteCartItemUrl,
            method:'GET',
            data: {
                variant_id: id,
                popup: popup
            },
            success:function (res) {
                if (res.status){
                    $("#cart-products-count").text(res.data.cart_count);
                    $("#cart-content").html(res.data.cart_items_html);
                }else{

                }
            }
        });
    });
});

