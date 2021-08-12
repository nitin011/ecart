{{-- Plugins Scripts --}}
<!-- js plugins -->
<script src="{{ asset('theme/js/jquery.min.js') }}"></script>
{{--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>--}}
<script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/vendor/WOW/dist/wow.js') }}"></script>
<script src="{{ asset('theme/js/function.js') }}"></script>
{{--<script src="{{ asset('theme/js/megamenu.js') }}"></script>--}}
<script src="{{ asset('theme/vendor/semantic/semantic.min.js') }}"></script>
<script src="{{ asset('theme/vendor/OwlCarousel/owl.carousel.js') }}"></script>

<!-- js plugins -->
{{--<script src="{{ asset('theme/js/jquery.minify.js') }}"></script>
<script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/js/wow.js') }}"></script>
<script src="{{ asset('theme/js/function.js') }}"></script>
<script src="{{ asset('theme/js/main.js') }}"></script>--}}

<script src="//cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.1/bootbox.min.js"></script>

<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{--Jquery Phone Number Input Mask--}}
<script src="//unpkg.com/jquery-input-mask-phone-number@1.0.14/dist/jquery-input-mask-phone-number.js"></script>

<!-- Megamenu JS -->
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</script>
<script type="text/javascript" src="{{ asset('assets/plugins/phone-input-mask/index.js') }}"></script>

<script>
window.Modernizr || document.write('<script src="{{ asset('theme/vendor/megamenu-js/js/vendor/modernizr-2.8.3.min.js') }}"><\/script>')


var addToCartUrl = '{{ route('customer.cart.add') }}';
    var deleteCartItemUrl = '{{ route('customer.cart.ajax-delete') }}';
    var cartUrl = '{{ route('customer.cart.index') }}';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.1/bootbox.min.js" type="text/javascript"></script>

{{-- Custom Scripts here --}}
<script type="text/javascript" src="{{ asset('theme/js/product/cart.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme/js/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme/js/product/custom.js') }}"></script>

<script type="text/javascript">
    /*$(document).ready(function () {
        $(document).on('click', '.dropdown-toggle', function (e) {
            $(this).parent('li').find('.dropdown-menu').toggleClass('show');
        });
    });*/
</script>
