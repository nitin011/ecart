   <!-- @include('web.layout.property') -->

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
    <link href="{{asset('user/css/roboto.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/oswald.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('user/css/responsive.css')}}" type="text/css" media="all">
    <!-- stylesheet -->

 

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
       @include('web.layout.header')
        <!-- header end -->

        <!-- notification start -->
        <aside id="notifications">
            <div class="container">
            </div>
        </aside>
        <!-- notification end -->

        <!-- banner section start -->
        <div id="displayTop" class="displaytoptwo">
            <div class="container">
                <div class="row">
                    <div class="nov-row col-lg-cus-2 hidden-md-down col-lg-3 col-xs-12">
                        <div class="nov-row-wrap row">
                            <div class="nov-html col-xl-12 col-lg-12 col-md-12">
                                <div class="block">
                                    <div class="block_content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nov-row col-lg-cus-10 policy-home spacing-15 col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <div id="nov-slider" class="slider-wrapper theme-default col-xl-12 col-lg-12 col-md-12" data-effect="random" data-slices="15" data-animspeed="500" data-pausetime="10000" data-startSlide="0" data-directionnav="true" data-controlnav="false" data-controlNavThumbs="false"
                                data-pauseonhover="true" data-manualadvance="false" data-randomStart="false">
                                <div class="nov_preload">
                                    <div class="process-loading active">
                                        <div class="loader">
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nivoSlider">
                                    <a href="#">
                                        <img src="images/Home/banner/banner-1.jpg" alt="" title="#htmlcaption_55" />
                                    </a>
                                    <a href="#">
                                        <img src="images/Home/banner/banner-2.jpg" alt="" title="#htmlcaption_56" />
                                    </a>
                                    <a href="#">
                                        <img src="images/Home/banner/banner-3.jpg" alt="" title="#htmlcaption_58" />
                                    </a>
                                </div>
                                <div id="htmlcaption_55" class="nivo-html-caption">
                                    <div class="nov-slider-ct">
                                        <div class="nov-center slider-none">
                                            <div class="nov-title effect-0">
                                                Slider Banner 1
                                            </div>
                                            <div class="nov-description effect-0">
                                                <p>Slider Banner 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="htmlcaption_56" class="nivo-html-caption">
                                    <div class="nov-slider-ct">
                                        <div class="nov-center slider-none">
                                            <div class="nov-title effect-0">
                                                Slider Banner 2
                                            </div>
                                            <div class="nov-description effect-0">
                                                <p>Slider Banner 2</p>
                                            </div>
                                            <div class="nov-html effect-0">
                                                <p>Slider Banner 2</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="htmlcaption_58" class="nivo-html-caption">
                                    <div class="nov-slider-ct">
                                        <div class="nov-center slider-none">
                                            <div class="nov-title effect-0">
                                                Slider Banner 3
                                            </div>
                                            <div class="nov-description effect-0">
                                                <p>Slider Banner 3</p>
                                            </div>
                                            <div class="nov-html effect-0">
                                                <p>Slider Banner 3</p>
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
        <!-- banner end -->

        <!-- wrapper start -->
          @yield('content')
        
        <!-- wrapper end -->

        <!-- footer start -->
          @include('web.layout.footer')
       
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
    <script type="text/javascript" src="{{asset('user/js/function.js')}}"></script>
    <!-- script end -->

</body>
<!-- body content end -->

</html>