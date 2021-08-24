$(document).ready(function () {
    $(document).on('click', '.add-to-cart', function () {
        let formData = $(this).closest('form').serialize();
        let button= $(this);
        $.ajax({
            url: addToCartUrl,
            method:'post',
            data: formData,
            beforeSend: function () {
                if (button.find('.icon-cart img').length) {
                    button.prop('disabled', true);
                    button.find('.icon-cart img').attr('src', loadingSvg);
                }else {
                    button.css({'pointer-events':'none', 'background':'#c99a5ca3'});
                    button.find('img').attr('src', loadingSvg);
                }
            },
            success:function (res) {
                if (res.status){
                    $("#cart-products-count").text(res.data.cart_count);
                    $("#cart-content").html(res.data.cart_items_html);
                    toastr["success"](res.message, "Success");
                }else{
                    //swal('error', res.message, 'error');
                    toastr["error"](res.message, "Error");
                }
            },
            complete: function () {
                if (button.find('.icon-cart img').length) {
                    button.prop('disabled', false);
                    button.find('.icon-cart img').attr('src', cartSvg);
                }else {
                    button.removeAttr('style');
                    button.find('img').attr('src', cartSvg);
                }
            }
        });

    });

    $(document).on('click', '.remove-item',function () {
        let id= $(this).data('id');
        let popup= true;
        bootbox.confirm({
            message: "Are you sure you want to delete ?",
            buttons: {
                confirm: {
                    label: "Yes",
                    className: 'btn-success'
                },
                cancel: {
                    label: "No",
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result === true) {
                    $.ajax({
                        url: deleteCartItemUrl,
                        method:'GET',
                        data: {
                            variant_id: id,
                            popup: popup
                        },
                        beforeSend: function () {

                        },
                        success:function (res) {
                            if (res.status){
                                $("#cart-products-count").text(res.data.cart_count);
                                $("#cart-content").html(res.data.cart_items_html);
                                toastr["success"](res.message, "Success");
                            }else{
                                toastr["error"](res.message, "Error");
                            }
                        },
                        complete: function () {

                        }
                    });
                }
            }
        });

    });
});


