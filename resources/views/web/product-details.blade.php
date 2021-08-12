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
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
    <!-- stylesheet -->

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

<body id="product" class="lang-en country-us currency-usd layout-left-column page-product tax-display-disabled product-id-2 product-lorem-ipsum-dolor-sit-amet product-id-category-9 product-id-manufacturer-5 product-id-supplier-0 product-available-for-order">

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


        <div id="wrapper-site">
            <div class="no-index">
                <div id="content-wrapper">
                    <div class="breadcrumb_section bg_gray page-title-mini mb-50">
                        <div class="container">
                            <!-- STRART CONTAINER -->
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="page-title">
                                        <h1>Product Details</h1>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ol class="breadcrumb d-flex justify-content-md-end">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Product Details</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTAINER-->
                    </div>
                    <section id="main">
                        <!-- Proudct image & description section start -->
                        <div class="product-detail-top">
                            <div class="container">
                                <div class="row main-productdetail" data-product_layout_thumb="bottom_thumb" style="position: relative;">
                                    <div class="col-lg-5 col-md-4 col-xs-12 box-image">
                                        <section class="page-content" id="content">
                                            <div class="images-container bottom_thumb">

                                                <div class="product-cover">
                                                    <img class="js-qv-product-cover img-fluid" src="images/Home/common/1-1.jpg" alt="" title="" style="width:100%;">
                                                    <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                        <i class="fa fa-expand"></i>
                                                    </div>
                                                </div>

                                                <div class="js-qv-mask mask only-product">
                                                    <div class="product-images slick-images" data-vertical="false" data-autoplay="false" data-autoplaytimeout="6000" data-items="4" data-margin="10" data-nav="true" data-dots="false" data-loop="false" data-items_mobile="3">
                                                        <div class="item thumb-container">
                                                            <img class="img-fluid thumb js-thumb  selected " data-image-medium-src="images/Home/common/2-1.jpg" data-image-large-src="images/Home/common/2-1.jpg" src="images/Home/common/2-1.jpg" alt="" title="">
                                                        </div>
                                                        <div class="item thumb-container">
                                                            <img class="img-fluid thumb js-thumb " data-image-medium-src="images/Home/common/8-1.jpg" data-image-large-src="images/Home/common/8-1.jpg" src="images/Home/common/8-1.jpg" alt="" title="">
                                                        </div>
                                                        <div class="item thumb-container">
                                                            <img class="img-fluid thumb js-thumb " data-image-medium-src="images/Home/common/8-2.jpg" data-image-large-src="images/Home/common/8-2.jpg" src="images/Home/common/8-2.jpg" alt="" title="">
                                                        </div>
                                                        <div class="item thumb-container">
                                                            <img class="img-fluid thumb js-thumb " data-image-medium-src="images/Home/common/9-1.jpg" data-image-large-src="images/Home/common/9-1.jpg" src="images/Home/common/9-1.jpg" alt="" title="">
                                                        </div>
                                                        <div class="item thumb-container">
                                                            <img class="img-fluid thumb js-thumb " data-image-medium-src="images/Home/common/10-1.jpg" data-image-large-src="images/Home/common/10-1.jpg" src="images/Home/common/10-1.jpg" alt="" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>

                                    <div class="col-lg-7 col-md-8 col-xs-12 mt-sm-20">
                                        <div class="product-information">
                                            <div class="product-actions">

                                                <form action="" method="post" id="add-to-cart-or-refresh" class="row">
                                                    <input type="hidden" name="token" value="">
                                                    <input type="hidden" name="id_product" value="2" id="product_page_product_id">
                                                    <input type="hidden" name="id_customization" value="0" id="product_customization_id">
                                                    <div class="col-12 col-lg-12 col-md-12 p-5">
                                                        <div class="product-reviews">
                                                            <div id="product_comments_block_extra">

                                                                <div class="comments_note">
                                                                    <span>Review: </span>
                                                                    <div class="star_content clearfix">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <h1 class="detail-product-name">Lorem ipsum dolor sit amet</h1>
                                                        <div class="group-price d-flex justify-content-start align-items-center">
                                                            <div class="product-prices">
                                                                <div class="product-price has-discount">
                                                                    <div class="current-price">
                                                                        <span class="price" content="43.2">$43.20</span>
                                                                        <span class="regular-price">$48.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="in_border end">
                                                            <div class="info-stock mb-20">
                                                                <label class="control-label">Availability:</label> In Stock
                                                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                            </div>

                                                            <div class="sku">
                                                                <label class="control-label">Sku:</label>
                                                                <span content="demo_3">demo_3</span>
                                                            </div>
                                                            <div class="pro-cate">
                                                                <label class="control-label">Categories:</label>
                                                                <div>
                                                                    <span>
                                                                        <a href="#"
                                                                            title="Computer &amp; Networking">Computer
                                                                            &amp; Networking</a>
                                                                    </span>
                                                                    <span>
                                                                        <a href="#" title="Hard Disk">Hard
                                                                            Disk</a>
                                                                    </span>
                                                                    <span>
                                                                        <a href="#"
                                                                            title="Laptop &amp; Accessories">Laptop
                                                                            &amp; Accessories</a>
                                                                    </span>
                                                                    <span>
                                                                        <a href="#"
                                                                            title="Smartphone &amp; Tablet">Smartphone
                                                                            &amp; Tablet</a>
                                                                    </span>
                                                                    <span>
                                                                        <a href="#" title="Electronics">Electronics
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="pro-tag">
                                                                <label class="control-label">Tags:</label>
                                                                <div>
                                                                    <span><a href="#">smartphone</a></span>
                                                                    <span><a href="#">iphone</a></span>
                                                                    <span><a href="#">samsung</a></span>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="product-quantity">
                                                            <span class="control-label">Quantity : </span>
                                                            <div class="qty">
                                                                <input type="text" name="qty" id="quantity_wanted" value="1" class="input-group" min="1" />
                                                            </div>
                                                        </div>


                                                        <div class="product-variants in_border">
                                                            <div class="product-variants-item">
                                                                <span class="control-label">Size : </span>
                                                                <select id="group_1" data-product-attribute="1" name="group[1]">
                                                                    <option value="1" title="S" selected="selected">S
                                                                    </option>
                                                                    <option value="2" title="M">M</option>
                                                                    <option value="3" title="L">L</option>
                                                                    <option value="4" title="XL">XL</option>
                                                                </select>
                                                            </div>

                                                        </div>


                                                        <div class="product-add-to-cart in_border">
                                                            <div class="add">
                                                                <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                    <div
                                                                        class="icon-cart d-flex align-items-center justify-content-center">
                                                                        <svg version="1.1" id="shopping-cart-2"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="#fff" height="20px" width="20px"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            x="0px" y="0px"
                                                                            viewBox="0 0 512.001 512.001"
                                                                            style="enable-background:new 0 0 512.001 512.001;"
                                                                            xml:space="preserve">
                                                                            <g>
                                                                                <g>
                                                                                    <path d="M503.142,79.784c-7.303-8.857-18.128-13.933-29.696-13.933H176.37c-6.085,0-11.023,4.938-11.023,11.023
                            c0,6.085,4.938,11.023,11.023,11.023h297.07c5.032,0,9.541,2.1,12.688,5.914c3.197,3.88,4.475,8.995,3.511,13.972l-44.054,220.282
                            c-1.709,7.871-8.383,13.366-16.232,13.366H184.323L83.158,36.854C77.69,21.234,62.886,10.74,45.932,10.74
                            c-0.005,0-0.011,0-0.017,0c-14.38,0.496-28.963,0.491-32.535,0.248c-3.555-0.772-7.397,0.22-10.152,2.976
                            c-4.305,4.305-4.305,11.282,0,15.587c3.412,3.412,4.564,4.564,43.068,3.23c7.22,0,13.674,4.564,15.995,11.188l103.618,311.962
                            c1.499,4.503,5.71,7.545,10.461,7.545h252.982c18.31,0,33.841-12.638,37.815-30.909l44.109-220.525
                            C513.503,100.513,510.544,88.757,503.142,79.784z"></path>
                                                                                </g>
                                                                            </g>
                                                                            <g>
                                                                                <g>
                                                                                    <path d="M424.392,424.11H223.77c-6.785,0-13.162-4.674-15.46-11.233l-21.495-63.935c-1.94-5.771-8.207-8.885-13.961-6.934
                            c-5.771,1.935-8.874,8.19-6.934,13.961l21.539,64.061c5.473,15.625,20.062,26.119,36.31,26.119h200.622
                            c6.085,0,11.023-4.933,11.023-11.018S430.477,424.11,424.392,424.11z"></path>
                                                                                </g>
                                                                            </g>
                                                                            <g>
                                                                                <g>
                                                                                    <path d="M231.486,424.104c-21.275,0-38.581,17.312-38.581,38.581s17.306,38.581,38.581,38.581s38.581-17.312,38.581-38.581
                            S252.761,424.104,231.486,424.104z M231.486,479.22c-9.116,0-16.535-7.419-16.535-16.535c0-9.116,7.419-16.535,16.535-16.535
                            c9.116,0,16.535,7.419,16.535,16.535C248.021,471.802,240.602,479.22,231.486,479.22z"></path>
                                                                                </g>
                                                                            </g>
                                                                            <g>
                                                                                <g>
                                                                                    <path
                                                                                        d="M424.392,424.104c-21.269,0-38.581,17.312-38.581,38.581s17.312,38.581,38.581,38.581
                            c21.269,0,38.581-17.312,38.581-38.581S445.661,424.104,424.392,424.104z M424.392,479.22c-9.116,0-16.535-7.419-16.535-16.535
                            c0-9.116,7.419-16.535,16.535-16.535c9.116,0,16.535,7.419,16.535,16.535C440.927,471.802,433.508,479.22,424.392,479.22z">
                                                                                    </path>
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
                                                                    <span>Add to cart</span>
                                                                </button>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>


                                                        <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="Refresh">

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Proudct image & description section end -->

                        <!-- Product description tab start -->
                        <div class="product-detail-middle">
                            <div class="container">
                                <div class="row">
                                    <div class="tabs col-lg-12 col-md-12 m-auto">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#description">Description</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#product-details">Product
                                                    Detail</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="tab-content">
                                            <div class="tab-pane fade in active" id="description">
                                                <div class="product-description">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam
                                                        felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer
                                                        adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                                                    <h3>Lorem ipsum dolor sit amet</h3>
                                                    <div class="image-des">
                                                        <a href="#" class="text-left"><img class="img-fluid text-left" src="images/Home/banner/banner-1.jpg" alt="#" /></a>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br />                                                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet,
                                                        consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                                    <div class="image-des">
                                                        <a href="#" class="text-left"><img class="img-fluid text-left" src="images/Home/banner/banner-2.jpg" alt="#" /></a>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br />                                                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet,
                                                        consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br /> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="product-details">

                                                <div class="in_border end">

                                                    <div class="info-stock mb-20">
                                                        <label class="control-label">Availability:</label> In Stock
                                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                    </div>

                                                    <div class="sku">
                                                        <label class="control-label">Sku:</label>
                                                        <span>demo_3</span>
                                                    </div>
                                                    <div class="pro-cate">
                                                        <label class="control-label">Categories:</label>
                                                        <div>
                                                            <span><a href="#" title="Computer &amp; Networking">Computer
                                                                    &amp; Networking</a></span>
                                                            <span><a href="#" title="Hard Disk">Hard Disk</a></span>
                                                            <span><a href="#" title="Laptop &amp; Accessories">Laptop
                                                                    &amp; Accessories</a></span>
                                                            <span><a href="#" title="Smartphone &amp; Tablet">Smartphone
                                                                    &amp; Tablet</a></span>
                                                            <span><a href="#" title="Electronics">Electronics</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="pro-tag">
                                                        <label class="control-label">Tags:</label>
                                                        <div>
                                                            <span><a href="#">smartphone</a></span>
                                                            <span><a href="#">iphone</a></span>
                                                            <span><a href="#">samsung</a></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Product description tab  -->

                        <!-- Related product section start -->
                        <div class="product-detail-bottom">
                            <div class="container">

                                <section class="relate-product product-accessories clearfix">
                                    <h3 class="h5 title_block">Related products<span class="sub_title">Hand-picked
                                            arrivals from the best designer</span></h3>
                                    <div class="products product_list grid owl-carousel owl-theme" data-autoplay="true" data-autoplayTimeout="6000" data-loop="true" data-items="5" data-items_large="4" data-margin="0" data-nav="true" data-dots="false" data-items_mobile="2">
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1">
                                                <div class="product-cat-content">

                                                    <div class="category-title">
                                                        <a href="#">Smartphone
                                                            &amp; Tablet
                                                        </a>
                                                    </div>


                                                    <div class="product-title">
                                                        <a href="#">Nullam
                                                            sed sollicitudin mauris
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="thumbnail-container">
                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/2-1.jpg" alt="" data-full-size-image-url="images/Home/common/2-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/2-2.jpg" alt="" data-full-size-image-url="images/Home/common/2-2.jpg" width="270" height="360">
                                                    </a>
                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">
                                                            <div class="product-price-and-shipping">
                                                                <span class="price">$25.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-comments">
                                                            <div class="star_content">
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                            </div>
                                                            <span>0 review</span>
                                                        </div>
                                                        <p class="seller_name">
                                                            <a title="View seller profile" href="#">
                                                                <i class="fa fa-user"></i> David James
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div class="product-buttons d-flex justify-content-start">
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="1">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add to
                                                                    cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span> Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="3" data-id-product-attribute="40">
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title"><a href="#">Mauris
                                                            molestie porttitor diam</a></div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/3-1.jpg" alt="" data-full-size-image-url="images/Home/common/3-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/3-2.jpg" alt="" data-full-size-image-url="images/Home/common/3-2.jpg" width="270" height="360">
                                                    </a>
                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">
                                                            <div class="product-price-and-shipping">
                                                                <span class="price">$69.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-comments">
                                                            <div class="star_content">
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                            </div>
                                                            <span>0 review</span>
                                                        </div>
                                                        <p class="seller_name">
                                                            <a title="View seller profile" href="#">
                                                                <i class="fa fa-user"></i> David James
                                                            </a>
                                                        </p>

                                                    </div>
                                                    <div class="product-buttons d-flex justify-content-start">
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="3">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add to
                                                                    cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_3" href="#" data-rel="3" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span> Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="4" data-id-product-attribute="52">
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Electronics</a>
                                                    </div>


                                                    <div class="product-title"><a href="#">Maecenas
                                                            vulputate ligula vel</a></div>

                                                </div>
                                                <div class="thumbnail-container">
                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/4-1.jpg" alt="" data-full-size-image-url="images/Home/common/4-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/4-2.jpg" alt="" data-full-size-image-url="images/Home/common/4-2.jpg" width="270" height="360">
                                                    </a>
                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">
                                                            <div class="product-price-and-shipping">
                                                                <span class="price">$49.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-comments">
                                                            <div class="star_content">
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                            </div>
                                                            <span>0 review</span>
                                                        </div>
                                                        <p class="seller_name">
                                                            <a title="View seller profile" href="#">
                                                                <i class="fa fa-user"></i> David James
                                                            </a>
                                                        </p>

                                                    </div>
                                                    <div class="product-buttons d-flex justify-content-start">
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="4">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add to
                                                                    cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_4" href="#" data-rel="4" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span> Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item" data-id-product="5" data-id-product-attribute="64">
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Smartphone
                                                            &amp; Tablet</a></div>


                                                    <div class="product-title"><a href="#">Vehicula
                                                            vel tempus sit amet ulte</a></div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/5-1.jpg" alt="" data-full-size-image-url="images/Home/common/5-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/6-1.jpg" alt="" data-full-size-image-url="images/Home/common/6-1.jpg" width="270" height="360">
                                                    </a>
                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">
                                                            <div class="product-price-and-shipping">
                                                                <span class="price">$15.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-comments">
                                                            <div class="star_content">
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                            </div>
                                                            <span>0 review</span>
                                                        </div>
                                                        <p class="seller_name">
                                                            <a title="View seller profile" href="#">
                                                                <i class="fa fa-user"></i> David James
                                                            </a>
                                                        </p>

                                                    </div>
                                                    <div class="product-buttons d-flex justify-content-start">
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="5">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add to
                                                                    cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_5" href="#" data-rel="5" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span> Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item  text-center">
                                            <div class="product-miniature js-product-miniature item-two first_item">
                                                <div class="product-cat-content">

                                                    <div class="category-title"><a href="#">Electronics</a>
                                                    </div>
                                                    <div class="product-title"><a href="#">Mauris
                                                            semper mattis gravida</a></div>

                                                </div>
                                                <div class="thumbnail-container">

                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                        <img class="img-fluid image-cover" src="images/Home/common/7-1.jpg" alt="" data-full-size-image-url="images/Home/common/7-1.jpg" width="270" height="360">
                                                        <img class="img-fluid image-secondary" src="images/Home/common/8-1.jpg" alt="" data-full-size-image-url="images/Home/common/8-1.jpg" width="270" height="360">
                                                    </a>
                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">
                                                        <div class="product-group-price">
                                                            <div class="product-price-and-shipping">
                                                                <span class="price">$15.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-comments">
                                                            <div class="star_content">
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                            </div>
                                                            <span>0 review</span>
                                                        </div>
                                                        <p class="seller_name">
                                                            <a title="View seller profile" href="#">
                                                                <i class="fa fa-user"></i> David James
                                                            </a>
                                                        </p>

                                                    </div>
                                                    <div class="product-buttons d-flex justify-content-start">
                                                        <form action="" method="post" class="formAddToCart">
                                                            <input type="hidden" name="token" value="">
                                                            <input type="hidden" name="id_product" value="16">
                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                    class="novicon-cart"></i><span>Add to
                                                                    cart</span></a>
                                                        </form>
                                                        <a class="addToWishlist wishlistProd_16" href="#" data-rel="16" onclick="">
                                                            <i class="fa fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                            <i class="fa fa-search"></i><span> Quick view</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- Related product section start -->

                        <!-- Zoom image modal start -->
                        <div class="modal fade js-product-images-modal" id="product-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <figure>
                                            <img class="js-modal-product-cover product-cover-modal" width="600" src="images/Home/common/8-1.jpg" alt="" title="">
                                        </figure>
                                        <aside id="thumbnails" class="thumbnails js-thumbnails text-xs-center">

                                            <div class="js-modal-mask mask  nomargin ">
                                                <ul class="product-images js-modal-product-images">
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="images/Home/common/8-1.jpg" class="thumb js-modal-thumb" src="images/Home/common/8-1.jpg" alt="" title="" width="125">
                                                    </li>
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="images/Home/common/9-1.jpg" class="thumb js-modal-thumb" src="images/Home/common/9-1.jpg" alt="" title="" width="125">
                                                    </li>
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="images/Home/common/10-1.jpg" class="thumb js-modal-thumb" src="images/Home/common/10-1.jpg" alt="" title="">
                                                    </li>
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="images/Home/common/11-1.jpg" class="thumb js-modal-thumb" src="images/Home/common/11-1.jpg" alt="" title="">
                                                    </li>
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="images/Home/common/12-1.jpg" class="thumb js-modal-thumb" src="images/Home/common/12-1.jpg" alt="" title="">
                                                    </li>
                                                </ul>
                                            </div>

                                        </aside>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- Zoom image modal end -->
                    </section>
                </div>
            </div>
        </div>

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
        <div id="back-top">
            <span>
                <i class="fa fa-long-arrow-up"></i> </span>
        </div>
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
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>


    <!-- <div id="stickymenu_bottom_mobile"
        class="d-flex align-items-center justify-content-center hidden-md-up text-center">
        <div class="stickymenu-item"><a href="http://demo.bestecartexpresstheme.com/digimart3/"><i
                    class="zmdi zmdi-home"></i><span>Home</span></a></div>
        <div class="stickymenu-item"><a href="#" class="js-btn-search"><i
                    class="zmdi zmdi-search"></i><span>Search</span></a></div>
        <div class="stickymenu-item">
            <div id="_mobile_cart_bottom" class="nov-toggle-page" data-target="#mobile-blockcart"></div>
        </div>
        <div class="stickymenu-item"><a
                href="http://demo.bestecartexpresstheme.com/digimart3/en/module/novblockwishlist/mywishlist"><i
                    class="zmdi zmdi-favorite-outline"></i><span>Wishlist</span></a></div>
        <div class="stickymenu-item"><a href="#" class="nov-toggle-page" data-target="#mobile-pageaccount"><i
                    class="zmdi zmdi-account-o"></i><span>Account</span></a></div>
    </div> -->
    <!-- mobile section end -->

    <!-- script start -->
    <script type="text/javascript" src="js/function.js"></script>
    <!-- script end -->
</body>
<!-- body content end -->

</html>