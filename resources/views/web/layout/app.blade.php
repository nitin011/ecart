<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env("APP_NAME") }} - @yield('title')</title>
    <!-- meta tag -->
    <meta name="description" content="Shop powered by Ecartexpress">
    <meta name="keywords" content="">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=yes">
    <!-- meta tag -->

    <!-- stylesheet -->
    <link rel="icon" type="image/jpeg" href="{{asset('user/images/logo.jpeg')}}">
    <link href="{{asset('user/css/roboto.css') }}" rel="stylesheet">
    <link href="{{asset('user/css/oswald.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('user/css/themify-icons.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('user/css/responsive.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('user/css/toastr.min.css')}}" type="text/css" media="all">
    <!-- stylesheet -->

    <!-- script -->
    <script type="text/javascript">
        var added_to_wishlist = "The product was successfully added to your wishlist.";
        var isLogged = false;
        var isLoggedWishlist = false;
        var loggin_required = "You must be logged in to manage your wishlist.";
        var ecartexpress = {
            "cart": {
                "products": [],
                "totals": {
                    "total": {
                        "type": "total",
                        "label": "Total",
                        "amount": 0,
                        "value": "$0.00"
                    },
                    "total_including_tax": {
                        "type": "total",
                        "label": "Total (tax incl.)",
                        "amount": 0,
                        "value": "$0.00"
                    },
                    "total_excluding_tax": {
                        "type": "total",
                        "label": "Total (tax excl.)",
                        "amount": 0,
                        "value": "$0.00"
                    }
                },
                "subtotals": {
                    "products": {
                        "type": "products",
                        "label": "Subtotal",
                        "amount": 0,
                        "value": "$0.00"
                    },
                    "discounts": null,
                    "shipping": {
                        "type": "shipping",
                        "label": "Shipping",
                        "amount": 0,
                        "value": "Free"
                    },
                    "tax": {
                        "type": "tax",
                        "label": "Taxes",
                        "amount": 0,
                        "value": "$0.00"
                    }
                },
                "products_count": 0,
                "summary_string": "0 items",
                "vouchers": {
                    "allowed": 0,
                    "added": []
                },
                "discounts": [],
                "minimalPurchase": 0,
                "minimalPurchaseRequired": ""
            },
            "currency": {
                "name": "US Dollar",
                "iso_code": "USD",
                "iso_code_num": "840",
                "sign": "$"
            },
            "customer": {
                "lastname": null,
                "firstname": null,
                "email": null,
                "birthday": null,
                "newsletter": null,
                "newsletter_date_add": null,
                "optin": null,
                "website": null,
                "company": null,
                "siret": null,
                "ape": null,
                "is_logged": false,
                "gender": {
                    "type": null,
                    "name": null
                },
                "addresses": []
            },
            "language": {
                "name": "English (English)",
                "iso_code": "en",
                "locale": "en-US",
                "language_code": "en-us",
                "is_rtl": "0",
                "date_format_lite": "m\/d\/Y",
                "date_format_full": "m\/d\/Y H:i:s",
                "id": 1
            },
            "page": {
                "title": "",
                "canonical": null,
                "meta": {
                    "title": "Ecart express",
                    "description": "Shop powered by Ecartexpress",
                    "keywords": "",
                    "robots": "index"
                },
                "page_name": "index",
                "body_classes": {
                    "lang-en": true,
                    "lang-rtl": false,
                    "country-US": true,
                    "currency-USD": true,
                    "layout-full-width": true,
                    "page-index": true,
                    "tax-display-disabled": true
                },
                "admin_notifications": []
            },
            "shop": {
                "name": "Ecartexpress",
                "logo": "\/ecartexpress\/img\/logo.jpeg",
                "stores_icon": "\/ecartexpress\/img\/logo_stores.png",
                "favicon": "\/ecartexpress\/img\/favicon.ico"
            },
            "urls": {
                "base_url": "http:\/\/ecartexpress.com\/ecartexpress\/",
                "current_url": "http:\/\/ecartexpress.com\/ecartexpress\/en\/?home=home_2",
                "shop_domain_url": "http:\/\/ecartexpress.com",
                "img_ps_url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/",
                "img_cat_url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/c\/",
                "img_lang_url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/l\/",
                "img_prod_url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/p\/",
                "img_manu_url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/m\/",
                "img_sup_url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/su\/",
                "img_ship_url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/s\/",
                "img_store_url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/st\/",
                "img_col_url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/co\/",
                "img_url": "http:\/\/ecartexpress.com\/ecartexpress\/themes\/vinova_ecartexpress\/assets\/img\/",
                "css_url": "http:\/\/ecartexpress.com\/ecartexpress\/themes\/vinova_ecartexpress\/assets\/css\/",
                "js_url": "http:\/\/ecartexpress.com\/ecartexpress\/themes\/vinova_ecartexpress\/assets\/js\/",
                "pic_url": "http:\/\/ecartexpress.com\/ecartexpress\/upload\/",
                "pages": {
                    "address": "http:\/\/ecartexpress.com\/ecartexpress\/en\/address",
                    "addresses": "http:\/\/ecartexpress.com\/ecartexpress\/en\/addresses",
                    "authentication": "http:\/\/ecartexpress.com\/ecartexpress\/en\/login",
                    "cart": "http:\/\/ecartexpress.com\/ecartexpress\/en\/cart",
                    "category": "http:\/\/ecartexpress.com\/ecartexpress\/en\/index.php?controller=category",
                    "cms": "http:\/\/ecartexpress.com\/ecartexpress\/en\/index.php?controller=cms",
                    "contact": "http:\/\/ecartexpress.com\/ecartexpress\/en\/contact-us",
                    "discount": "http:\/\/ecartexpress.com\/ecartexpress\/en\/discount",
                    "guest_tracking": "http:\/\/ecartexpress.com\/ecartexpress\/en\/guest-tracking",
                    "history": "http:\/\/ecartexpress.com\/ecartexpress\/en\/order-history",
                    "identity": "http:\/\/ecartexpress.com\/ecartexpress\/en\/identity",
                    "index": "http:\/\/ecartexpress.com\/ecartexpress\/en\/",
                    "my_account": "http:\/\/ecartexpress.com\/ecartexpress\/en\/my-account",
                    "order_confirmation": "http:\/\/ecartexpress.com\/ecartexpress\/en\/order-confirmation",
                    "order_detail": "http:\/\/ecartexpress.com\/ecartexpress\/en\/index.php?controller=order-detail",
                    "order_follow": "http:\/\/ecartexpress.com\/ecartexpress\/en\/order-follow",
                    "order": "http:\/\/ecartexpress.com\/ecartexpress\/en\/order",
                    "order_return": "http:\/\/ecartexpress.com\/ecartexpress\/en\/index.php?controller=order-return",
                    "order_slip": "http:\/\/ecartexpress.com\/ecartexpress\/en\/credit-slip",
                    "pagenotfound": "http:\/\/ecartexpress.com\/ecartexpress\/en\/page-not-found",
                    "password": "http:\/\/ecartexpress.com\/ecartexpress\/en\/password-recovery",
                    "pdf_invoice": "http:\/\/ecartexpress.com\/ecartexpress\/en\/index.php?controller=pdf-invoice",
                    "pdf_order_return": "http:\/\/ecartexpress.com\/ecartexpress\/en\/index.php?controller=pdf-order-return",
                    "pdf_order_slip": "http:\/\/ecartexpress.com\/ecartexpress\/en\/index.php?controller=pdf-order-slip",
                    "prices_drop": "http:\/\/ecartexpress.com\/ecartexpress\/en\/prices-drop",
                    "product": "http:\/\/ecartexpress.com\/ecartexpress\/en\/index.php?controller=product",
                    "search": "http:\/\/ecartexpress.com\/ecartexpress\/en\/search",
                    "sitemap": "http:\/\/ecartexpress.com\/ecartexpress\/en\/sitemap",
                    "stores": "http:\/\/ecartexpress.com\/ecartexpress\/en\/stores",
                    "supplier": "http:\/\/ecartexpress.com\/ecartexpress\/en\/supplier",
                    "register": "http:\/\/ecartexpress.com\/ecartexpress\/en\/login?create_account=1",
                    "order_login": "http:\/\/ecartexpress.com\/ecartexpress\/en\/order?login=1"
                },
                "alternative_langs": {
                    "en-us": "http:\/\/ecartexpress.com\/ecartexpress\/en\/?home=home_2",
                    "fr-fr": "http:\/\/ecartexpress.com\/ecartexpress\/fr\/?home=home_2",
                    "es-es": "http:\/\/ecartexpress.com\/ecartexpress\/es\/?home=home_2",
                    "it-it": "http:\/\/ecartexpress.com\/ecartexpress\/it\/?home=home_2",
                    "pl-pl": "http:\/\/ecartexpress.com\/ecartexpress\/pl\/?home=home_2",
                    "ar-sa": "http:\/\/ecartexpress.com\/ecartexpress\/ar\/?home=home_2"
                },
                "theme_assets": "\/ecartexpress\/themes\/vinova_ecartexpress\/assets\/",
                "actions": {
                    "logout": "http:\/\/ecartexpress.com\/ecartexpress\/en\/?mylogout="
                },
                "no_picture_image": {
                    "bySize": {
                        "cart_default": {
                            "url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/p\/en-default-cart_default.jpg",
                            "width": 125,
                            "height": 167
                        },
                        "home_default": {
                            "url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/p\/en-default-home_default.jpg",
                            "width": 270,
                            "height": 360
                        },
                        "medium_default": {
                            "url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/p\/en-default-medium_default.jpg",
                            "width": 270,
                            "height": 360
                        },
                        "large_default": {
                            "url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/p\/en-default-large_default.jpg",
                            "width": 470,
                            "height": 627
                        },
                        "small_default": {
                            "url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/p\/en-default-small_default.jpg",
                            "width": 600,
                            "height": 800
                        }
                    },
                    "small": {
                        "url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/p\/en-default-cart_default.jpg",
                        "width": 125,
                        "height": 167
                    },
                    "medium": {
                        "url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/p\/en-default-medium_default.jpg",
                        "width": 270,
                        "height": 360
                    },
                    "large": {
                        "url": "http:\/\/ecartexpress.com\/ecartexpress\/img\/p\/en-default-small_default.jpg",
                        "width": 600,
                        "height": 800
                    },
                    "legend": ""
                }
            },
            "configuration": {
                "display_taxes_label": false,
                "is_catalog": false,
                "show_prices": true,
                "opt_in": {
                    "partner": true
                },
                "quantity_discount": {
                    "type": "discount",
                    "label": "Discount"
                },
                "voucher_enabled": 0,
                "return_enabled": 0
            },
            "field_required": [],
            "breadcrumb": {
                "links": [{
                    "title": "Home",
                    "url": "http:\/\/ecartexpress.com\/ecartexpress\/en\/"
                }],
                "count": 1
            },
            "link": {
                "protocol_link": "http:\/\/",
                "protocol_content": "http:\/\/"
            },
            "time": 1622654958,
            "static_token": "",
            "token": "eb27ef7b5f301933afb68009f93062c2"
        };
        var search_url = "";
    </script>
    <!-- script -->

    <!-- stylesheet -->
    <style type="text/css">
        #main-site {
            background-color: #ffffff;
        }

        @media (min-width: 1200px) {
            .container {
                width: 1500px;
            }

            #header .container {
                width: 1500px;
            }

            .footer .container {
                width: 1500px;
            }

            #index .container {
                width: 1500px;
            }
        }

        #popup-subscribe .modal-dialog .modal-content {
            background-image: url(../images/blog/1.jpg);
        }
    </style>
    <!-- stylesheet -->
    {{-- Extra CSS--}}
    @stack('css')
    {{--Extra CSS--}}
</head>

<!-- body content start -->

<body id="@yield('page')" class="lang-en country-us currency-usd layout-full-width page-index tax-display-disabled">

<!-- wrapper content start -->
<section id="main-site" class="displayhome">
    @include('web.layout.header')

    <!-- notification start -->
        <aside id="notifications">
            <div class="container">
            </div>
        </aside>
        <!-- notification end -->

    @yield('content')

    @include('web.layout.footer')


        {{--<div class="canvas-overlay"></div>--}}
        <!-- back to top start -->
        <div id="back-top">
            <span>
                <i class="fa fa-long-arrow-up"></i> </span>
        </div>
        <!-- back to top end -->
</section>
@include('web.layout.mobile')

<!-- script start -->
<script type="text/javascript" src="{{asset('user/js/function.js')}}"></script>
<script type="text/javascript" src="{{asset('user/js/toastr.min.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.1/bootbox.min.js"></script>
<script type="text/javascript" src="{{asset('theme/vendor/confirmDelete/confirm_delete.js')}}"></script>
@include('customer.layouts.globals.delete')
<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "5000",
        "hideDuration": "3000",
        "timeOut": "5000",
        "extendedTimeOut": "3000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>
<script>
    var addToCartUrl = '{{ route('customer.cart.add') }}';
    var deleteCartItemUrl = '{{ route('customer.cart.ajax-delete') }}';
    var cartSvg = '{{ asset('user/images/icons/cart.svg') }}';
    var loadingSvg = '{{ asset('user/images/icons/loading.svg') }}';
    var cartUrl ='{{ route('customer.checkout.proceed') }}';

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script type="text/javascript" src="{{asset('user/js/cart.js')}}"></script>
<!-- script end -->
@stack('js')
</body>
</html>
