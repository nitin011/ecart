
$(document).on('ready', function(){
    $('[name="payment_option"]').on('change', function() {
        var $value = $(this).attr('value');
        $('.payment-text').slideUp();
        $('[data-method="'+$value+'"]').slideDown();
    });
});


$(document).ready(function () {
    $('.create-account,.different_address').hide();
    $('#createaccount:checkbox').on('change', function(){
        if($(this).is(":checked")) {
            $('.create-account').slideDown();
        } else {
            $('.create-account').slideUp();
        }
    });
    $('#differentaddress:checkbox').on('change', function(){
        if($(this).is(":checked")) {
            $('.different_address').slideDown();
        } else {
            $('.different_address').slideUp();
        }
    });


    $('.plus').on('click', function() {
        if ($(this).prev().val()) {
            let value= parseInt($(this).prev().val()) + 1;
            $(this).prev().val(value);
            checkoutProduct('add',$(this).data('id'), value);
        }
    });
    $('.minus').on('click', function() {
        if ($(this).next().val() > 1) {
            let value= parseInt($(this).next().val()) - 1;
            if ($(this).next().val() > 1) $(this).next().val(value);
            checkoutProduct('less',$(this).data('id'), value);
        }
    });
});




