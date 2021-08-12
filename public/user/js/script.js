
$(document).on('ready', function(){
    $('[name="payment_option"]').on('change', function() {
        var $value = $(this).attr('value');
        $('.payment-text').slideUp();
        $('[data-method="'+$value+'"]').slideDown();
    });
});


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
        $(this).prev().val(+$(this).prev().val() + 1);
    }
});
$('.minus').on('click', function() {
    if ($(this).next().val() > 1) {
        if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    }
});




