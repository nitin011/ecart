<!-- header -->
<div class="header">
    <!-- desktop header -->
    <div class="main_header">
        <!-- Header Top Start Here -->
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
                        <div class="welcome-text">
                            <ul>
                                <li><img
                                        src="{{ asset('theme/images/call-white.png') }}">{{ $site_configurations['phone_number'] }}
                                </li>
                                <li><img
                                        src="{{ asset('theme/images/mail-white.png') }}">{{ $site_configurations['email_address'] }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="socail-icon-box text-left">
                            <ul>
                                <li class="facebook">
                                    <a href="{{ $site_configurations['facebook_profile_link'] }}" target="_blank">
                                        <img
                                            src="{{ asset('theme/images/icons/facebook.svg') }}"></a></li>
                                <li class="twitter">
                                    <a href="{{ $site_configurations['twitter_profile_link'] }}" target="_blank">
                                        <img
                                            src="{{ asset('theme/images/icons/twitter.svg') }}"></a></li>
                                <li class="linkedin">
                                    <a href="{{ $site_configurations['linkedin_profile_link'] }}" target="_blank">
                                        <img
                                            src="{{ asset('theme/images/icons/linkedin.svg') }}"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header menu  -->
        <div class="header_middle sticky-header" id="dynamic">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand pull-left" href="{{ route('customer.index') }}">
                        <img src="{{ asset('theme/images/logo.png') }}" height="40px" class="logo-image">
                    </a>
                    <button class="navbar-toggler navbar-toggler-right pull-right" type="button"
                            data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <img src="{{ asset('theme/images/icons/menu-black.png') }}" class="menu-icon">
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbar">
                        <div class="navbar-nav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('customer.index') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('customer.products.index') }}">Shop</a>
                                </li>
                                {{--<li class="nav-item">
                                    <a class="nav-link dropdown-toggle" href="shop.html" data-toggle="dropdown">
                                        Collection
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Vegetable Collection</a>
                                        <a class="dropdown-item" href="#">Daily Essentials</a>
                                        <a class="dropdown-item" href="#">Home & Kitchen</a>
                                        <a class="dropdown-item" href="#">Personal Care</a>
                                        <a class="dropdown-item" href="#">fashion & Lifestyle</a>
                                        <a class="dropdown-item" href="#">Baby care</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>--}}
                                {{--<li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>--}}
                            </ul>
                        </div>
                    </div>

                    <div class="button-group desktop-display">
                        <ul class="navbar-nav mr-0">

                            {{-- <li class="like-sec nav-item">
                                 --}}{{--<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                     <img src="{{ asset('theme/images/heart.png') }}">
                                     <div class="budge">3</div>
                                 </a>--}}{{--

                                 <div class="dropdown-menu sub-dropdown">
                                     <div>
                                         <div class="dropdown-shadow">
                                             <div class="bg-primary p-3">
                                                 <h5 class="mb-0 text-white">Wish List<small
                                                         class="badge  badge-light float-right pt-1">4</small></h5>
                                             </div>
                                             <a class="dropdown-item iq-sub-card" href="#">
                                                 <div class="media align-items-center">
                                                     <div class="">
                                                         <img class="avatar-40 rounded"
                                                              src="{{ asset('theme/images/product-list') }}/1.png"
                                                              alt="">
                                                     </div>
                                                     <div class="media-body ml-3">
                                                         <h6 class="mb-0 ">Sanitizers & Disinfectants</h6>
                                                         <small class="float-right font-size-12">5 days ago</small>
                                                         <p class="mb-0">Jond Bini</p>
                                                     </div>
                                                 </div>
                                             </a>
                                             <a class="dropdown-item iq-sub-card" href="#">
                                                 <div class="media align-items-center">
                                                     <div class="">
                                                         <img class="avatar-40 rounded"
                                                              src="{{ asset('theme/images/product-list') }}/2.png"
                                                              alt="">
                                                     </div>
                                                     <div class="media-body ml-3">
                                                         <h6 class="mb-0 ">Beauty at Home</h6>
                                                         <small class="float-right font-size-12">2 days ago</small>
                                                         <p class="mb-0">Jond Bini</p>
                                                     </div>
                                                 </div>
                                             </a>

                                         </div>
                                     </div>


                                 </div>
                             </li>--}}


                            <li class="shopping-cart-sec nav-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    <img src="{{ asset('theme/images/cart.png') }}">
                                    <div class="badge badge-info cart-count">{{ \Cart::getContent()->count() }}</div>
                                </a>
                                <div class="dropdown-menu sub-dropdown" id="cart-list-popup">
                                    @include('customer.layouts.globals.cart-list-popup')
                                </div>
                            </li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('customer.login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('customer.register'))
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="{{ route('customer.register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="profile-sec nav-item">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <img src="{{ asset('theme/images/profile.png') }}">
                                    </a>
                                    <div class="dropdown-menu sub-dropdown">
                                        <div>
                                            <div class="dropdown-shadow">
                                                <div class="bg-primary p-3">
                                                    <h5 class="mb-0 text-white line-height">{{ $user->user_name }}</h5>
                                                </div>

                                                <a class="dropdown-item iq-sub-card"
                                                   href="{{ route('customer.profile.show') }}">
                                                    <div class="media align-items-center">
                                                        <div class="rounded iq-card-icon iq-bg-primary">
                                                            <img src="{{ asset('theme/images/icons/user.svg') }}"
                                                                 height="50px">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0 ">My Profile</h6>
                                                        </div>
                                                    </div>

                                                </a>

                                                <a class="dropdown-item iq-sub-card"
                                                   href="{{ route('customer.order.index') }}">
                                                    <div class="media align-items-center">
                                                        <div class="rounded iq-card-icon iq-bg-primary">
                                                            <img src="{{ asset('theme/images/icons/settings.svg') }}"
                                                                 height="50px">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0 ">Orders</h6>
                                                        </div>
                                                    </div>

                                                </a>
                                                <a class="dropdown-item iq-sub-card"
                                                   href="{{ route('customer.logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    <div class="media align-items-center">
                                                        <div class="rounded iq-card-icon iq-bg-primary">
                                                            <img src="{{ asset('theme/images/icons/logout.svg') }}"
                                                                 height="50px">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0 ">Logout</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                                <form id="logout-form" action="{{ route('customer.logout') }}"
                                                      method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ajax-alert alert" role="alert" style="display: none;">
                                        <span id="message"> </span>
                                        <button type="button" class="close ml-4" data-dismiss="alert"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- header bottom -->
        <div class="header_bottom ">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-3 ">
                        <div id="mega-menu">
                            <div class="categories_menu">
                                <div class="categories_title category-toggle d-flex">
                                    <h6 class="categori_toggle">Shop By Category</h6>
                                    <div class="img-right">
                                        <img src="{{ asset('theme/images/arrow-down.png') }}" class="text-right">
                                    </div>
                                </div>
                            </div>
                            <ul class="menu">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('customer.products.by-category',$category['cat_id']) }}"
                                           title="" class="dropdown text-decoration-none">
                                            {{--<span class="menu-img">
                                                <img src="{{ asset($category->image) }}"
                                                     alt="{{ $category->title }}">
                                            </span>--}}
                                            <span class="menu-title">
                                                {{ substr($category['title'],0,15) }}
                                            </span>
                                        </a>
                                        @if(count($category['categories'])>0)
                                            <div class="drop-menu">
                                                @foreach($category['categories'] as $category_level_1)
                                                    <div class="one-third">
                                                        <a href="{{ route('customer.products.by-category',$category_level_1['cat_id']) }}"
                                                           title="">
                                                            <div class="cat-title">
                                                                {{ $category_level_1['title'] }}
                                                            </div>
                                                        </a>
                                                        <ul>
                                                            @foreach($category_level_1['categories'] as $category_level_2)
                                                                <li>
                                                                    <a href="{{ route('customer.products.by-category',$category_level_2['cat_id']) }}"
                                                                       title="">{{ $category_level_2['title'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                        {{--<div class="show">
                                                            <a href="#" title="">Shop All</a>
                                                        </div>--}}
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-9 ">
                        <div class="search_container">
                            <form action="{{ route('customer.products.by-search') }}" method="get"
                                  class="input-group search-bar" role="search">
                                <div class="search_box">
                                    <div class="search-input">
                                        <input type="search" name="search" value="{{ request('search') }}"
                                               placeholder="What are you looking for (eg.mango, onion)"
                                               class="input-group-field">
                                    </div>
                                    <button type="submit" class="search-btn">
                                        Search
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('customer.layouts.partials.mobile-header')
</div>
