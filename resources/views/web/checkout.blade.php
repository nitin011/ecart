<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ecartexpress</title>
    <!-- meta tag -->
    <meta name="description" content="Shop powered by Ecartexpress">
    <meta name="keywords" content="">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=yes">
    <!-- meta tag -->

    <!-- stylesheet -->
    <link rel="icon" type="image/jpeg" href="images/logo.jpeg">
    <link href="css/roboto.css" rel="stylesheet">
    <link href="css/oswald.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
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
                    "title": "Ecart Express",
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
</head>

<!-- body content start -->

<body id="index" class="lang-en country-us currency-usd layout-full-width page-index tax-display-disabled">

    <!-- wrapper content start -->
    <section id="main-site" class="displayhome">
        <!-- header start -->
        <header id="header" class="header-section sticky-menu">
            <div class="header-mobile hidden-md-up">
                <div class="hidden-md-up text-xs-center mobile d-flex align-items-center justify-content-end">
                    <div id="_mobile_mainmenu" class="item-mobile-top" style="margin-right: 10px;"><i class="material-icons d-inline">menu</i></div>

                    <div class="header_link_myaccount">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>

                        <ul class="submenu">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg><span>Account </span></li>

                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg><span>Settings</span></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in">
                                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                    <polyline points="10 17 15 12 10 7"></polyline>
                                    <line x1="15" y1="12" x2="3" y2="12"></line>
                                </svg><span>Log in</span></li>
                        </ul>
                    </div>
                    <div class="mobile_logo ml-auto">
                        <a href="#">
                            <!-- <img class="logo-mobile img-fluid" src="images/logo.jpeg" alt="Logo"> -->
                            E & E
                        </a>
                    </div>
                </div>

                <div id="_mobile_search">
                    <div id="_mobile_search_content"></div>
                </div>
            </div>



            <div class="header-center hidden-sm-down">
                <div class="header-bottom hidden-sm-down">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="contentsticky_verticalmenu verticalmenu-main col-lg-3 col-md-1 d-flex header-bottom-left col-lg-cus-2" data-textshowmore="Show More" data-textless="Hide" data-desktop_item="9">
                                <div class="toggle-nav d-flex align-items-center justify-content-start">
                                    <span class="btnov-icon">
                                        <i class="zmdi zmdi-format-subject"></i>
                                    </span>
                                    <span class="title-verticalmenu">All Categories</span>
                                </div>
                                <div class="verticalmenu-content  has-showmore hide">
                                    <div id="_desktop_verticalmenu" class="nov-verticalmenu block" data-count_showmore="10">
                                        <div class="box-content block_content">
                                            <div id="verticalmenu" class="verticalmenu" role="navigation">
                                                <ul class="menu level1">
                                                    <li class="item  parent"><a href="#" title="Home Appliance"><i
                                                                class="hasicon nov-icon"
                                                                style="background:url('images/icons/lamp.png') no-repeat scroll center center;"></i>Home
                                                            Appliance</a><span class="show-sub fa-active-sub"></span>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li class="item "><a href="#" title="Macbook Pro">Macbook
                                                                        Pro</a></li>
                                                                <li class="item  parent"><a href="#" title="Laptop Thinkpad">Laptop Thinkpad</a><span class="show-sub fa-active-sub"></span>
                                                                    <div class="dropdown-menu">
                                                                        <ul>
                                                                            <li class="item "><a href="#" title="Aliquam lobortis">Aliquam
                                                                                    lobortis</a></li>
                                                                            <li class="item "><a href="#" title="Duis Reprehenderit">Duis
                                                                                    Reprehenderit</a></li>
                                                                            <li class="item "><a href="#" title="Voluptate">Voluptate</a></li>
                                                                            <li class="item "><a href="#" title="Tongue Est">Tongue Est</a>
                                                                            </li>
                                                                            <li class="item "><a href="#" title="Venison Andouille">Venison
                                                                                    Andouille</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="item "><a href="#" title="EliteBook">EliteBook</a></li>
                                                                <li class="item "><a href="#" title="Lenovo Yoga">Lenovo
                                                                        Yoga</a></li>
                                                                <li class="item "><a href="#" title="Probook">Probook</a>
                                                                </li>
                                                                <li class="item "><a href="#" title="Dell Precision">Dell
                                                                        Precision</a></li>
                                                                <li class="item "><a href="#" title="Dell Alienware">Dell
                                                                        Alienware</a></li>
                                                                <li class="item "><a href="#" title="HP Pavilion">HP
                                                                        Pavilion</a></li>
                                                                <li class="item "><a href="#" title="HDD Box - Caddy Bay">HDD Box - Caddy
                                                                        Bay</a>
                                                                </li>
                                                                <li class="item "><a href="#" title="Dell Latitude">Dell
                                                                        Latitude</a></li>
                                                                <li class="item "><a href="#" title="Dell Inspiron">Dell
                                                                        Inspiron</a></li>
                                                                <li class="item "><a href="#" title="Trackpad">Trackpad</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="item  parent group"><a href="#" title="Electronics"><i
                                                                class="hasicon nov-icon"
                                                                style="background:url('images/icons/electronic.png') no-repeat scroll center center;"></i>Electronics</a><span class="show-sub fa-active-sub"></span>
                                                        <div class="dropdown-menu" style="width:922px">
                                                            <ul>
                                                                <li class="item group-list-category">
                                                                    <div class="menu-content">
                                                                        <div class="row">
                                                                            <div class="col-lg-3 col-12">
                                                                                <p class="title-category">Houseware</p>
                                                                                <ul>
                                                                                    <li><a href="#">Fridge</a></li>
                                                                                    <li><a href="#">Air conditioning</a>
                                                                                    </li>
                                                                                    <li><a href="#">Electric Fan</a>
                                                                                    </li>
                                                                                    <li><a href="#">Spray Mist Fan</a>
                                                                                    </li>
                                                                                    <li><a href="#">Vacuum Cleanr</a>
                                                                                    </li>
                                                                                    <li><a href="#">Washing Machine</a>
                                                                                    </li>
                                                                                    <li><a href="#">Cooker</a></li>
                                                                                    <li><a href="#">Television</a></li>
                                                                                    <li><a href="#">Heater</a></li>
                                                                                    <li><a href="#">Water purifier</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-lg-3 col-12">
                                                                                <p class="title-category">Kitchen equipment
                                                                                </p>
                                                                                <ul>
                                                                                    <li><a href="#">Cooker</a></li>
                                                                                    <li><a href="#">Microwave</a></li>
                                                                                    <li><a href="#">Dishwasher</a></li>
                                                                                    <li><a href="#">Dryer</a></li>
                                                                                    <li><a href="#">Kitchen infrared</a>
                                                                                    </li>
                                                                                    <li><a href="#">Gas stove</a></li>
                                                                                    <li><a href="#">Oven</a></li>
                                                                                    <li><a href="#">Water boiler</a>
                                                                                    </li>
                                                                                    <li><a href="#">Blender</a></li>
                                                                                    <li><a href="#">Fruit presses</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="item  parent group"><a href="#" title="Audio &amp; Sound Devices"><i
                                                                class="hasicon nov-icon"
                                                                style="background:url('images/icons/headphone.png') no-repeat scroll center center;"></i>Audio
                                                            &amp; Sound Devices</a><span class="show-sub fa-active-sub"></span>
                                                        <div class="dropdown-menu" style="width:922px">
                                                            <ul>
                                                                <li class="item group-list-category-1">
                                                                    <div class="menu-content">
                                                                        <div class="row">
                                                                            <div class="col-lg-3 col-12">
                                                                                <p class="title-category">Speaker</p>
                                                                                <ul>
                                                                                    <li class="item "><a href="#" title="Lansing Products">Lansing
                                                                                            Products</a></li>
                                                                                    <li class="item  parent"><a href="#" title="UFi Products">UFi
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Edifier Products">Edifier
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Sarotech Products">Sarotech
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Plantronics Products">Plantronics
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Sennheiser Products">Sennheiser
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Mionix Products">Mionix
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Libratone Products">Libratone
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="LehmannAudio Products">LehmannAudio
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Amphion LoudSpeaker">Amphion
                                                                                            LoudSpeaker</a></li>
                                                                                    <li class="item "><a href="#" title="Tangent Audio">Tangent
                                                                                            Audio</a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-lg-3 col-12">
                                                                                <p class="title-category">HeadPhone</p>
                                                                                <ul>
                                                                                    <li class="item "><a href="#" title="Lansing Products">Lansing
                                                                                            Products</a></li>
                                                                                    <li class="item  parent"><a href="#" title="UFi Products">UFi
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Edifier Products">Edifier
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Sarotech Products">Sarotech
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Plantronics Products">Plantronics
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Sennheiser Products">Sennheiser
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Mionix Products">Mionix
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Libratone Products">Libratone
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="LehmannAudio Products">LehmannAudio
                                                                                            Products</a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-lg-3 col-12">
                                                                                <p class="title-category">HeadPhone</p>
                                                                                <ul>
                                                                                    <li class="item "><a href="#" title="Lansing Products">Lansing
                                                                                            Products</a></li>
                                                                                    <li class="item  parent"><a href="#" title="UFi Products">UFi
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Edifier Products">Edifier
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Sarotech Products">Sarotech
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Plantronics Products">Plantronics
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Sennheiser Products">Sennheiser
                                                                                            Products</a></li>
                                                                                    <li class="item "><a href="#" title="Mionix Products">Mionix
                                                                                            Products</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="item  parent group"><a href="#" title="Smartphone &amp; Tablets"><i class="hasicon nov-icon"
                                                                style="background:url('images/icons/table.png') no-repeat scroll center center;"></i>Smartphone
                                                            &amp; Tablets</a><span class="show-sub fa-active-sub"></span>
                                                        <div class="dropdown-menu" style="width:922px">
                                                            <ul>
                                                                <li class="item group-list-category-2">
                                                                    <div class="menu-content">
                                                                        <div class="row">
                                                                            <div class="col-lg-3 col-12">
                                                                                <p class="title-category">IPhone</p>
                                                                                <ul>
                                                                                    <li class="item "><a href="#" title="iPhone X">iPhone
                                                                                            X</a>
                                                                                    </li>
                                                                                    <li class="item  parent"><a href="#" title="iPhone 7 / 7 Plus">iPhone
                                                                                            7 / 7 Plus</a></li>
                                                                                    <li class="item "><a href="#" title="iPhone 6s / 6s Plus">iPhone
                                                                                            6s / 6s Plus</a></li>
                                                                                    <li class="item "><a href="#" title="Accesories">Accesories</a>
                                                                                    </li>
                                                                                </ul>
                                                                                <p class="title-category mt-23">TABLET
                                                                                </p>
                                                                                <ul>
                                                                                    <li class="item "><a href="#" title="iPad">iPad</a></li>
                                                                                    <li class="item  parent"><a href="#" title="Samsung">Samsung</a>
                                                                                    </li>
                                                                                    <li class="item "><a href="#" title="Lenovo">Lenovo</a>
                                                                                    </li>
                                                                                    <li class="item "><a href="#" title="Huawei">Huawei</a>
                                                                                    </li>
                                                                                    <li class="item "><a href="#" title="Asus">Asus</a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-lg-3 col-12">
                                                                                <p class="title-category">Android phone
                                                                                </p>
                                                                                <ul>
                                                                                    <li class="item "><a href="#" title="SamSung Galaxy">SamSung
                                                                                            Galaxy</a></li>
                                                                                    <li class="item  parent"><a href="#" title="Samsung ">Samsung
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="item "><a href="#" title="OPPO ">OPPO </a></li>
                                                                                    <li class="item "><a href="#" title="Sony">Sony</a></li>
                                                                                    <li class="item "><a href="#" title="Xiaomi ">Xiaomi </a>
                                                                                    </li>
                                                                                    <li class="item "><a href="#" title="Huawei ">Huawei </a>
                                                                                    </li>
                                                                                    <li class="item "><a href="#" title="Nokia ">Nokia </a>
                                                                                    </li>
                                                                                    <li class="item "><a href="#" title="Motorola ">Motorola</a>
                                                                                    </li>
                                                                                    <li class="item "><a href="#" title="Asus (Zenfone)">Asus
                                                                                            (Zenfone)</a></li>
                                                                                    <li class="item "><a href="#" title="HTC">HTC</a></li>
                                                                                    <li class="item "><a href="#" title="Mobiistar">Mobiistar</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="item "><a href="#" title="Fashion"><i
                                                                class="hasicon nov-icon"
                                                                style="background:url('images/icons/fashion.png') no-repeat scroll center center;"></i>Fashion</a>
                                                    </li>
                                                    <li class="item "><a href="#" title="Security Devices"><i
                                                                class="hasicon nov-icon"
                                                                style="background:url('images/icons/security.png') no-repeat scroll center center;"></i>Security
                                                            Devices</a></li>
                                                    <li class="item "><a href="#" title="Smart Home"><i
                                                                class="hasicon nov-icon"
                                                                style="background:url('images/icons/home.png') no-repeat scroll center center;"></i>Smart
                                                            Home</a></li>
                                                    <li class="item "><a href="#" title="Kids &amp; Childrend"><i
                                                                class="hasicon nov-icon"
                                                                style="background:url('images/icons/kid.png') no-repeat scroll center center;"></i>Kids
                                                            &amp; Childrend</a></li>
                                                    <li class="item "><a href="#" title="Laptops &amp; Accessories"><i
                                                                class="hasicon nov-icon"
                                                                style="background:url('images/icons/laptop.png') no-repeat scroll center center;"></i>Laptops
                                                            &amp; Accessories</a></li>
                                                    <li class="item "><a href="#" title="Perfume &amp; Cosmetic"><i
                                                                class="hasicon nov-icon"
                                                                style="background:url('images/icons/perfume.png') no-repeat scroll center center;"></i>Perfume
                                                            &amp; Cosmetic</a></li>
                                                    <li class="item "><a href="#" title="Office Devices"><i
                                                                class="hasicon nov-icon"
                                                                style="background:url('images/icons/printer.png') no-repeat scroll center center;"></i>Office
                                                            Devices</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-11 col-lg-cus-10 d-flex justify-content-between align-items-center header-bottom-right">
                                <div id="_desktop_logo" class="contentsticky_logo d-flex align-items-center justify-content-start col-xl-2 col-lg-3 col-md-4">
                                    <a href="#">
                                        <!-- <img class="logo img-fluid" src="images/logo.jpeg" alt="logo"> -->
                                        E & E
                                    </a>
                                </div>
                                <div id="_desktop_search" class="contentsticky_search">
                                    <!-- block seach mobile -->
                                    <!-- Block search module TOP -->
                                    <div id="desktop_search_content" data-id_lang="1" data-ajaxsearch="1" data-novadvancedsearch_type="top" data-instantsearch="" data-search_ssl="" data-link_search_ssl="" data-action="">
                                        <form method="get" action="" id="searchbox" class="form-novadvancedsearch">
                                            <input type="hidden" name="fc" value="module">
                                            <input type="hidden" name="module" value="novadvancedsearch">
                                            <input type="hidden" name="controller" value="result">
                                            <input type="hidden" name="orderby" value="position" />
                                            <input type="hidden" name="orderway" value="desc" />
                                            <input type="hidden" name="id_category" class="id_category" value="0" />
                                            <div class="input-group">
                                                <input type="text" id="search_query_top" class="search_query ui-autocomplete-input form-control" name="search_query" value="" placeholder="Search" />



                                                <span class="input-group-btn">
                                                    <button class="btn btn-secondary" type="submit"
                                                        name="submit_search"><i
                                                            class="material-icons">search</i></button>
                                                </span>
                                            </div>

                                        </form>
                                    </div>
                                    <!-- /Block search module TOP -->

                                </div>
                                <div class="contentsticky_group d-flex" style="position:relative">
                                    <div class="header_link_myaccount d-flex align-items-center">
                                        <a class="login d-flex" href="#" rel="nofollow" title="Log in to your customer account">
                                            <svg version="1.1" id="user" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 20px 20px;" xml:space="preserve" height="20px" width="20px">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: #676767;
                                                    }
                                                </style>
                                                <g>
                                                    <g>
                                                        <path class="st0"
                                                            d="M256,288.4c-153.8,0-238.6,72.8-238.6,204.9c0,10.3,8.4,18.7,18.7,18.7h439.7c10.3,0,18.7-8.4,18.7-18.7
                                                        C494.6,361.2,409.8,288.4,256,288.4z M55.5,474.6c7.3-98.8,74.7-148.9,200.5-148.9s193.2,50.1,200.5,148.9H55.5z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path class="st0" d="M256,0c-70.7,0-124,54.4-124,126.4c0,74.2,55.6,134.5,124,134.5s124-60.4,124-134.5C380,54.4,326.7,0,256,0z
                                                         M256,223.6c-47.7,0-86.6-43.6-86.6-97.2c0-51.6,36.4-89.1,86.6-89.1c49.4,0,86.6,38.3,86.6,89.1C342.6,180,303.7,223.6,256,223.6
                                                        z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>


                                        <ul class="submenu">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg><span>Account </span></li>

                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path
                                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                    </path>
                                                </svg><span>Settings</span></li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in">
                                                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                                    <polyline points="10 17 15 12 10 7"></polyline>
                                                    <line x1="15" y1="12" x2="3" y2="12"></line>
                                                </svg><span>Log in</span></li>
                                        </ul>

                                    </div>

                                    <div id="_desktop_cart" style="margin-left:10px">
                                        <div class="blockcart cart-preview active" data-refresh-url="">
                                            <div class="header-cart">
                                                <div class="cart-left">
                                                    <div class="shopping-cart">
                                                        <svg version="1.1" id="shopping-cart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <path d="M503.142,79.784c-7.303-8.857-18.128-13.933-29.696-13.933H176.37c-6.085,0-11.023,4.938-11.023,11.023
			c0,6.085,4.938,11.023,11.023,11.023h297.07c5.032,0,9.541,2.1,12.688,5.914c3.197,3.88,4.475,8.995,3.511,13.972l-44.054,220.282
			c-1.709,7.871-8.383,13.366-16.232,13.366H184.323L83.158,36.854C77.69,21.234,62.886,10.74,45.932,10.74
			c-0.005,0-0.011,0-0.017,0c-14.38,0.496-28.963,0.491-32.535,0.248c-3.555-0.772-7.397,0.22-10.152,2.976
			c-4.305,4.305-4.305,11.282,0,15.587c3.412,3.412,4.564,4.564,43.068,3.23c7.22,0,13.674,4.564,15.995,11.188l103.618,311.962
			c1.499,4.503,5.71,7.545,10.461,7.545h252.982c18.31,0,33.841-12.638,37.815-30.909l44.109-220.525
			C513.503,100.513,510.544,88.757,503.142,79.784z" />
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M424.392,424.11H223.77c-6.785,0-13.162-4.674-15.46-11.233l-21.495-63.935c-1.94-5.771-8.207-8.885-13.961-6.934
			c-5.771,1.935-8.874,8.19-6.934,13.961l21.539,64.061c5.473,15.625,20.062,26.119,36.31,26.119h200.622
			c6.085,0,11.023-4.933,11.023-11.018S430.477,424.11,424.392,424.11z" />
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M231.486,424.104c-21.275,0-38.581,17.312-38.581,38.581s17.306,38.581,38.581,38.581s38.581-17.312,38.581-38.581
			S252.761,424.104,231.486,424.104z M231.486,479.22c-9.116,0-16.535-7.419-16.535-16.535c0-9.116,7.419-16.535,16.535-16.535
			c9.116,0,16.535,7.419,16.535,16.535C248.021,471.802,240.602,479.22,231.486,479.22z" />
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M424.392,424.104c-21.269,0-38.581,17.312-38.581,38.581s17.312,38.581,38.581,38.581
			c21.269,0,38.581-17.312,38.581-38.581S445.661,424.104,424.392,424.104z M424.392,479.22c-9.116,0-16.535-7.419-16.535-16.535
			c0-9.116,7.419-16.535,16.535-16.535c9.116,0,16.535,7.419,16.535,16.535C440.927,471.802,433.508,479.22,424.392,479.22z" />
                                                                </g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                        </svg>

                                                    </div>
                                                    <div class="cart-products-count">0</div>
                                                </div>
                                                <div class="cart-right d-flex flex-column align-self-end ml-13">
                                                    <span class="title-cart">Cart</span>
                                                    <span class="cart-item"> items</span>
                                                </div>
                                            </div>
                                            <div class="cart_block ">
                                                <div class="cart-block-content">
                                                    <div class="no-items">
                                                        No products in the cart
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>





        </header>

        <div id="header-sticky">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="d-flex align-items-center col-xl-3 col-md-3">
                        <div class="contentstickynew_verticalmenu"></div>
                        <div class="contentstickynew_logo"></div>
                    </div>
                    <div class="contentstickynew_search col-xl-7 col-md-6"></div>
                    <div class="contentstickynew_group d-flex justify-content-end align-items-center col-xl-2 col-md-3">
                    </div>
                </div>
            </div>
        </div>
        <!-- header end -->

        <!-- notification start -->
        <aside id="notifications">
            <div class="container">
            </div>
        </aside>
        <!-- notification end -->

        <!-- wrapper start -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div class="breadcrumb_section bg_gray page-title-mini">
                    <div class="container">
                        <!-- STRART CONTAINER -->
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="page-title">
                                    <h1>Checkout</h1>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ol class="breadcrumb d-flex justify-content-md-end">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Checkout</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTAINER-->
                </div>
                <div id="main">
                    <section id="content" class="page-home pagehome-two">
                        <div class="main_content mb-50">


                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="bg-white">
                                            <div class="arrordian-section">
                                                <div class="accordion" id="accordionExample">
                                                    <!-- first card -->
                                                    <div class="card">
                                                        <div class="card-head" id="headingOne">
                                                            <div class="container">
                                                                <h2 class="mb-0 iocn-arroridan collapse" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                    <div class="number-content">1</div>
                                                                    <div class="title-accordian">Account Details</div>
                                                                </h2>
                                                            </div>
                                                        </div>

                                                        <div id="collapseOne" class="collapse in" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                            <div class="card-body pb-0">
                                                                <p>We need your phone number so we can inform you about any delay or problem.
                                                                </p>
                                                                <div class="edit-btn-sec">
                                                                    <div class="edit-content">4 digits code send your phone +918437176189
                                                                    </div>
                                                                    <button class="edit-btn">Edit</button>
                                                                </div>

                                                                <div class="enter-code-section">
                                                                    <h5 class="code-title">Enter Code</h5>
                                                                    <div class="enter-code-input-box">
                                                                        <input type="text">
                                                                        <input type="text">
                                                                        <input type="text">
                                                                        <input type="text">
                                                                        <button class="next-btn">Next</button>
                                                                    </div>
                                                                    <button class="code-title resend-btn">Resend Code</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- line -->
                                                    <div>
                                                        <hr>
                                                    </div>

                                                    <!-- second card -->
                                                    <div class="card">
                                                        <div class="card-head" id="headingTwo">
                                                            <div class="container">
                                                                <h2 class="mb-0 iocn-arroridan collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    <div class="number-content">2</div>
                                                                    <div class="title-accordian"> Delivery Address</div>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                            <div class="card-body pt-0">
                                                                <div class="delivery-accordian mt-30">

                                                                    <form action="post">
                                                                        <div class="input-group">
                                                                            <div class="input-box">
                                                                                <label>Name*</label>
                                                                                <input type="text" placeholder="Name" class="form-control">
                                                                            </div>

                                                                            <div class="input-box">
                                                                                <label>Email Address*</label>
                                                                                <input type="text" placeholder="Email Address" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-box">
                                                                            <label>Flat / House / Office No.*</label>
                                                                            <input type="text" placeholder="Address" class="form-control">
                                                                        </div>
                                                                        <div class="input-box">
                                                                            <label>County*</label>
                                                                            <input type="text" placeholder="County" class="form-control">
                                                                        </div>
                                                                        <div class="input-group">
                                                                            <div class="input-box">
                                                                                <label>Postcode*</label>
                                                                                <input type="text" placeholder="Postcode" class="form-control">
                                                                            </div>
                                                                            <div class="input-box">
                                                                                <label>Town*</label>
                                                                                <input type="text" placeholder="Town" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="delivery-bottom-btn d-flex">
                                                                            <div class="left-btn">
                                                                                <button class="btn btn-primary btn-outline">Save</button>
                                                                            </div>
                                                                            <div class="right-btn ml-auto">
                                                                                <button class="btn btn-primary">Next</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- line -->
                                                    <div>
                                                        <hr>
                                                    </div>

                                                    <!-- third card -->
                                                    <div class="card">
                                                        <div class="card-head" id="headingThree">
                                                            <div class="container">
                                                                <h2 class="mb-0 iocn-arroridan collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    <div class="number-content">3</div>
                                                                    <div class="title-accordian"> Order Summary</div>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                            <div class="card-body pt-0">
                                                                <div class="form-group">




                                                                    <div class="row">
                                                                        <div class="col-12 mt-30">
                                                                            <div class="table-responsive shop_cart_table">
                                                                                <table class="table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="product-thumbnail">&nbsp;
                                                                                            </th>
                                                                                            <th class="product-name">Product</th>
                                                                                            <th class="product-price">Price</th>
                                                                                            <th class="product-qty">Quantity</th>
                                                                                            <th class="product-subtotal">Total</th>
                                                                                            <th class="product-remove">Remove</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="product-thumbnail">
                                                                                                <a href="#"><img src="images/Home/common/1-1.jpg" alt="product1"></a>
                                                                                            </td>
                                                                                            <td class="product-name" data-title="Product"><a href="#">Watch For Woman</a>
                                                                                            </td>
                                                                                            <td class="product-price" data-title="Price">$45.00
                                                                                            </td>
                                                                                            <td class="product-quantity" data-title="Quantity">
                                                                                                <div class="quantity">
                                                                                                    <input type="button" value="-" class="minus">
                                                                                                    <input type="text" name="quantity" value="2" title="Qty" class="qty" size="4">
                                                                                                    <input type="button" value="+" class="plus">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="product-subtotal" data-title="Total">
                                                                                                $90.00</td>
                                                                                            <td class="product-remove" data-title="Remove">
                                                                                                <a href="#">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="close" width="10px" height="10px" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"></path>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="product-thumbnail">
                                                                                                <a href="#"><img src="images/Home/common/1-2.jpg" alt="product2"></a>
                                                                                            </td>
                                                                                            <td class="product-name" data-title="Product"><a href="#">Watch for women</a>
                                                                                            </td>
                                                                                            <td class="product-price" data-title="Price">$55.00
                                                                                            </td>
                                                                                            <td class="product-quantity" data-title="Quantity">
                                                                                                <div class="quantity">
                                                                                                    <input type="button" value="-" class="minus">
                                                                                                    <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                                                                                    <input type="button" value="+" class="plus">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="product-subtotal" data-title="Total">
                                                                                                $55.00</td>
                                                                                            <td class="product-remove" data-title="Remove">
                                                                                                <a href="#">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="close-3" width="10px" height="10px" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"></path>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="product-thumbnail">
                                                                                                <a href="#"><img src="images/Home/common/2-1.jpg" alt="product3"></a>
                                                                                            </td>
                                                                                            <td class="product-name" data-title="Product"><a href="#">Smartphone</a></td>
                                                                                            <td class="product-price" data-title="Price">$68.00
                                                                                            </td>
                                                                                            <td class="product-quantity" data-title="Quantity">
                                                                                                <div class="quantity">
                                                                                                    <input type="button" value="-" class="minus">
                                                                                                    <input type="text" name="quantity" value="3" title="Qty" class="qty" size="4">
                                                                                                    <input type="button" value="+" class="plus">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="product-subtotal" data-title="Total">
                                                                                                $204.00</td>
                                                                                            <td class="product-remove" data-title="Remove">
                                                                                                <a href="#">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="close-2" width="10px" height="10px" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"></path>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                        <g>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>

                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                    <div class="mt-20">
                                                                        <button class="btn btn-primary">Proceed to Payment</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- line -->
                                                    <div>
                                                        <hr>
                                                    </div>

                                                    <!-- forth card -->
                                                    <div class="card">
                                                        <div class="card-head" id="headingFour">
                                                            <div class="container">
                                                                <h2 class="mb-0 iocn-arroridan collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                    <div class="number-content">4</div>
                                                                    <div class="title-accordian">Payment</div>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                            <div class="card-body pt-0">
                                                                <div class="payment_method-checkout">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="rpt100 mt-30">
                                                                                <ul class="radio--group-inline-container_1 list-unstyled">
                                                                                    <li>
                                                                                        <div class="radio-item_1">
                                                                                            <input id="cashondelivery1" value="cashondelivery" name="paymentmethod" type="radio" data-minimum="50.0">
                                                                                            <label for="cashondelivery1" class="radio-label_1">Cash on
                                                                                                Delivery</label>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="radio-item_1">
                                                                                            <input id="card1" value="card" name="paymentmethod" type="radio" data-minimum="50.0">
                                                                                            <label for="card1" class="radio-label_1">Credit
                                                                                                / Debit Card</label>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="form-group return-departure-dts mt-30" data-method="cashondelivery" style="display:none">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="pymnt_title">
                                                                                            <h4>Cash on Delivery</h4>
                                                                                            <p>Cash on Delivery will not be available if your order value exceeds $10.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group return-departure-dts mt-30" data-method="card" style="display:none">
                                                                                <div class="row">

                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group mt-1">
                                                                                            <label class="control-label">Holder
                                                                                                Name*</label>
                                                                                            <div class="ui search focus">
                                                                                                <div class="ui left icon input swdh11 swdh19">
                                                                                                    <input class="form-control" type="text" name="holdername" value="" id="holder[name]" required="" maxlength="64" placeholder="Holder Name">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group mt-1">
                                                                                            <label class="control-label">Card
                                                                                                Number*</label>
                                                                                            <div class="ui search focus">
                                                                                                <div class="ui left icon input swdh11 swdh19">
                                                                                                    <input class="form-control" type="text" name="cardnumber" value="" id="card[number]" required="" maxlength="64" placeholder="Card Number">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <div class="form-group mt-1">
                                                                                            <label class="control-label">Expiration
                                                                                                Month*</label>
                                                                                            <div class="custom_select">
                                                                                                <select class="form-control first_null not_chosen">
                                                                                                    <option value="">
                                                                                                        Month
                                                                                                    </option>
                                                                                                    <option value="1">
                                                                                                        January
                                                                                                    </option>
                                                                                                    <option value="2">
                                                                                                        February
                                                                                                    </option>
                                                                                                    <option value="3">
                                                                                                        March
                                                                                                    </option>
                                                                                                    <option value="4">
                                                                                                        April
                                                                                                    </option>
                                                                                                    <option value="5">
                                                                                                        May</option>
                                                                                                    <option value="6">
                                                                                                        June
                                                                                                    </option>
                                                                                                    <option value="7">
                                                                                                        July
                                                                                                    </option>
                                                                                                    <option value="8">
                                                                                                        August
                                                                                                    </option>
                                                                                                    <option value="9">
                                                                                                        September
                                                                                                    </option>
                                                                                                    <option value="10">
                                                                                                        October
                                                                                                    </option>
                                                                                                    <option value="11">
                                                                                                        November
                                                                                                    </option>
                                                                                                    <option value="12">
                                                                                                        December
                                                                                                    </option>
                                                                                                </select>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <div class="form-group mt-1">
                                                                                            <label class="control-label">Expiration
                                                                                                Year*</label>
                                                                                            <div class="ui search focus">
                                                                                                <div class="ui left icon input swdh11 swdh19">
                                                                                                    <input class="form-control" type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-4">
                                                                                        <div class="form-group mt-1">
                                                                                            <label class="control-label">CVV*</label>
                                                                                            <div class="ui search focus">
                                                                                                <div class="ui left icon input swdh11 swdh19">
                                                                                                    <input class="form-control" name="card[cvc]" maxlength="3" placeholder="CVV">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#" class="btn btn-primary mt-20">Place Order</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-30">
                                        <div class="bg_gray mb-30 p-5">
                                            <div class="order-summary-section">
                                                <div>
                                                    <h2 class="title-checkout">Price details</h2>
                                                </div>


                                                <!-- line -->
                                                <div>
                                                    <hr>
                                                </div>

                                                <!-- amount description -->
                                                <div class="amount-description-sec">
                                                    <div class="amount-sec">
                                                        <div class="amount-left-content">
                                                            Price (3 item)
                                                        </div>
                                                        <div class="amount-right-content">
                                                            $ 349
                                                        </div>
                                                    </div>

                                                    <div class="amount-sec">
                                                        <div class="amount-left-content">
                                                            Delivery Charges
                                                        </div>
                                                        <div class="amount-right-content">
                                                            $ 40
                                                        </div>
                                                    </div>


                                                    <div class="amount-sec">
                                                        <div class="amount-left-content">
                                                            Discount
                                                        </div>
                                                        <div class="amount-right-content">
                                                            $ 100
                                                        </div>
                                                    </div>

                                                    <!-- <div class="amount-sec">
                                                        <div class="amount-left-content">
                                                            Total Saving
                                                        </div>
                                                        <div class="amount-right-content">
                                                            $ 3
                                                        </div>
                                                    </div> -->

                                                    <div class="amount-sec">
                                                        <div class="amount-left-content heading-bottom">
                                                            Total Amount
                                                        </div>
                                                        <div class="amount-right-content text-green">
                                                            $ 289
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- line -->
                                                <div>
                                                    <hr>
                                                </div>

                                                <!-- secure checkout -->
                                                <div class="secure-checkout-sec text-center">
                                                    <img src="images/icons/lock.png"> Secure checkout
                                                </div>
                                            </div>
                                        </div>

                                        <!-- have a promocode -->
                                        <div class="bg_gray mb-30 p-5">
                                            <div class="have-a-promocode">
                                                <a href="#">Have a promocode?</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- wrapper end -->

        <!-- footer start -->
        <footer class="footer footer-section">
            <div class="inner-footer">
                <div class="container">
                    <div class="row">
                        <div class="nov_row-full-width clearfix w-100"></div>
                        <div class="nov-row footer-center " data-nov-full-width="true">
                            <div class="nov-row-wrap row">
                                <div class="nov-html col-xl-4 col-lg-4 col-md-4">
                                    <div class="block">
                                        <div class="block_content">
                                            <p class="logo-footer">
                                                <!-- <img src="images/logo.jpeg" alt="" width="129"
                                                    height="22" /> -->
                                                E & E
                                            </p>

                                            <div class="data-contact d-flex align-self-stretch">
                                                <div class="title-icon">info contact
                                                    <svg version="1.1" id="placeholder-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" fill="#ededed" xml:space="preserve" height="38px" width="38px">
                                                        <g>
                                                            <g>
                                                                <path d="M256,0C156.748,0,76,80.748,76,180c0,33.534,9.289,66.26,26.869,94.652l142.885,230.257
                                                                    c2.737,4.411,7.559,7.091,12.745,7.091c0.04,0,0.079,0,0.119,0c5.231-0.041,10.063-2.804,12.75-7.292L410.611,272.22
                                                                    C427.221,244.428,436,212.539,436,180C436,80.748,355.252,0,256,0z M384.866,256.818L258.272,468.186l-129.905-209.34
                                                                    C113.734,235.214,105.8,207.95,105.8,180c0-82.71,67.49-150.2,150.2-150.2S406.1,97.29,406.1,180
                                                                    C406.1,207.121,398.689,233.688,384.866,256.818z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path d="M256,90c-49.626,0-90,40.374-90,90c0,49.309,39.717,90,90,90c50.903,0,90-41.233,90-90C346,130.374,305.626,90,256,90z
                                                                     M256,240.2c-33.257,0-60.2-27.033-60.2-60.2c0-33.084,27.116-60.2,60.2-60.2s60.1,27.116,60.1,60.2
                                                                    C316.1,212.683,289.784,240.2,256,240.2z"></path>
                                                            </g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="content-data-contact">
                                                    <div class="info-contact">Contact info :</div>
                                                    <div class="content-info-contact">123 Rakari, Jaipur (Rajasthan)</div>
                                                </div>
                                            </div>

                                            <div class="social-content">
                                                <div class="title_block">
                                                    Follow us on
                                                </div>
                                                <div id="social_block">
                                                    <div class="social">
                                                        <ul class="list-inline mb-0 justify-content-end">
                                                            <li class="list-inline-item mb-0"><a href="#" target="_blank"><i
                                                                        class="zmdi zmdi-facebook"></i></a></li>
                                                            <li class="list-inline-item mb-0"><a href="#" target="_blank"><i
                                                                        class="zmdi zmdi-twitter"></i></a></li>
                                                            <li class="list-inline-item mb-0"><a href="#" target="_blank"><i
                                                                        class="zmdi zmdi-youtube-play"></i></a></li>
                                                            <li class="list-inline-item mb-0"><a href="#" target="_blank"><i
                                                                        class="zmdi zmdi-instagram"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nov-html col-xl-4 col-lg-4 col-md-4">
                                    <div class="block">
                                        <div class="title_block">
                                            CORPORATE INFO
                                        </div>
                                        <div class="block_content">
                                            <ul>
                                                <li><a href="#">Who We Are ?</a></li>
                                                <li><a href="#">Corporate Responsibility</a></li>
                                                <li><a href="#">Careers</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms of Use</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="nov-html col-xl-4 col-lg-4 col-md-4">
                                    <div class="block">
                                        <div class="title_block">
                                            NEED HELP
                                        </div>
                                        <div class="block_content">
                                            <ul>
                                                <li><a href="#">Order Tracking</a></li>
                                                <li><a href="#">The Privacy Policy</a></li>
                                                <li><a href="#">Payments & Returns</a></li>
                                                <li><a href="#">Size Guide</a></li>
                                                <li><a href="#">Product Care</a></li>
                                                <li><a href="#">FAQ's</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="nov_row-full-width clearfix w-100"></div>
                    </div>
                </div>
            </div>
            <div id="nov-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-items-center justify-content-md-center justify-content-sm-center d-flex pb-xs-max-20 flex-center">
                            <span>
                                Copyright © 2021 Ecartexpress. All Rights Reserved
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <div class="canvas-overlay"></div>
        <!-- back to top start -->
        <div id="back-top">
            <span>
                <i class="fa fa-long-arrow-up"></i> </span>
        </div>
        <!-- back to top end -->
    </section>
    <!-- wrapper content end -->

    <!-- mobile section start -->
    <div id="mobile_top_menu_wrapper" class="hidden-md-up">
        <div class="content">
            <div id="_mobile_verticalmenu"></div>
        </div>
    </div>

    <div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up">
        <div class="content-boxpage col">
            <div class="box-header d-flex justify-content-between align-items-center">
                <div class="title-box">Menu</div>
                <div class="close-box">Close</div>
            </div>
            <div class="box-content">
                <div id="_mobile_top_menu" class="js-top-menu"></div>
            </div>
        </div>
    </div>

    <div id="mobile-blockcart" class="mobile-boxpage d-flex hidden-md-up">
        <div class="content-boxpage col">
            <div class="box-header d-flex justify-content-between align-items-center">
                <div class="title-box">Cart</div>
                <div class="close-box">Close</div>
            </div>
            <div id="_mobile_cart" class="box-content"></div>
        </div>
    </div>

    <div id="mobile-pageaccount" class="mobile-boxpage d-flex hidden-md-up" data-titlebox-parent="Account">
        <div class="content-boxpage col">
            <div class="box-header d-flex justify-content-between align-items-center">
                <div class="back-box">Back</div>
                <div class="title-box">Account</div>
                <div class="close-box">Close</div>
            </div>
            <div class="box-content d-flex justify-content-center align-items-center text-center">
                <div>
                    <div id="_mobile_account_list">
                        <div class="account-list-content">
                            <div>
                                <a class="login" href="#" rel="nofollow" title="Log in to your customer account"><i
                                        class="fa fa-cog"></i>My Account</a>
                            </div>
                            <div>
                                <a class="login" href="#" rel="nofollow" title="Log in to your customer account"><i
                                        class="fa fa-sign-in"></i>Sign in</a>
                            </div>
                            <div>
                                <a class="register" href="#" rel="nofollow" title="Register Account"><i
                                        class="fa fa-user"></i>Register
                                    Account</a>
                            </div>
                            <div>
                                <a class="check-out" href="#" rel="nofollow" title="Checkout"><i
                                        class="material-icons">check_circle</i>Checkout</a>
                            </div>
                            <div class="link_wishlist">
                                <a href="#" title="My Wishlists">
                                    <i class="fa fa-heart"></i>My Wishlists
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- <div id="stickymenu_bottom_mobile"
        class="d-flex align-items-center justify-content-center hidden-md-up text-center">
        <div class="stickymenu-item"><a href="#"><i class="zmdi zmdi-home"></i><span>Home</span></a></div>
        <div class="stickymenu-item"><a href="#" class="js-btn-search"><i
                    class="zmdi zmdi-search"></i><span>Search</span></a></div>
        <div class="stickymenu-item">
            <div id="_mobile_cart_bottom" class="nov-toggle-page" data-target="#mobile-blockcart"></div>
        </div>
        <div class="stickymenu-item"><a href="#"><i class="zmdi zmdi-favorite-outline"></i><span>Wishlist</span></a>
        </div>
        <div class="stickymenu-item"><a href="#" class="nov-toggle-page" data-target="#mobile-pageaccount"><i
                    class="zmdi zmdi-account-o"></i><span>Account</span></a></div>
    </div> -->
    <!-- mobile section end -->

    <!-- script start -->
    <script type="text/javascript" src="js/function.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script>
        $('input[name="paymentmethod"]').on('click', function() {
            var $value = $(this).attr('value');
            $('.return-departure-dts').slideUp();
            $('[data-method="' + $value + '"]').slideDown();
        });
    </script>
    <!-- script end -->

</body>
<!-- body content end -->

</html>