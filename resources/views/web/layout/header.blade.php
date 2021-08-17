 <header id="header" class="header-section sticky-menu">
            <div class="header-mobile hidden-md-up">
                <div class="hidden-md-up text-xs-center mobile d-flex align-items-center justify-content-end">
                    <div id="_mobile_mainmenu" class="item-mobile-top" style="margin-right: 10px;"><i class="material-icons d-inline">menu</i></div>

                    <div class="header_link_myaccount">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>

                        <ul class="submenu">
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg><span>Account </span></li>


                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
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
                        <a href="{{ route('customer.index') }}">
                            {{--<img class="logo-mobile img-fluid" src="{{ asset('theme/images/logo.png') }}" alt="Logo">--}}
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
                                <div class="verticalmenu-content  has-showmore show">
                                    <div id="_desktop_verticalmenu" class="nov-verticalmenu block" data-count_showmore="10">
                                        <div class="box-content block_content">
                                            <div id="verticalmenu" class="verticalmenu" role="navigation">
                                                <ul class="menu level1">
                                                    @foreach($categories as $category)
                                                        <li class="item @if(count($category['categories'])>0) parent @endif">
                                                            <a href="{{ route('customer.products.by-category',$category['cat_id']) }}" title="{{$category['title']}}">
                                                                <i class="hasicon nov-icon" style="background:url('images/icons/lamp.png') no-repeat scroll center center;"></i>{{ substr($category['title'],0,15) }}
                                                            </a><span class="show-sub fa-active-sub"></span>
                                                            @if(count($category['categories'])>0)
                                                            <div class="dropdown-menu">
                                                                <ul>
                                                                    @foreach($category['categories'] as $category_level_1)
                                                                        <li class="item @if(count($category_level_1['categories'])) parent @endif">
                                                                            <a href="{{ route('customer.products.by-category',$category_level_1['cat_id']) }}" title="{{ $category_level_1['title'] }}">{{ $category_level_1['title'] }}</a><span class="show-sub fa-active-sub"></span>
                                                                            @if(count($category_level_1['categories']))
                                                                            <div class="dropdown-menu">
                                                                                <ul>
                                                                                    @foreach($category_level_1['categories'] as $category_level_2)
                                                                                        <li class="item"><a href="{{ route('customer.products.by-category',$category_level_2['cat_id']) }}" title="{{ $category_level_2['title'] }}">{{ $category_level_2['title'] }}</a></li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </div>
                                                                                @endif
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-11 col-lg-cus-10 d-flex justify-content-between align-items-center header-bottom-right">
                                <div id="_desktop_logo" class="contentsticky_logo d-flex align-items-center justify-content-start col-xl-2 col-lg-3 col-md-4">
                                    <a href="{{ route('customer.index') }}">
                                        {{--<img class="logo img-fluid" src="{{ asset('theme/images/logo.png') }}" alt="logo">--}}
                                        E & E
                                    </a>
                                </div>
                                <div id="_desktop_search" class="contentsticky_search">
                                    <!-- block seach mobile -->
                                    <!-- Block search module TOP -->
                                    <div id="desktop_search_content" data-id_lang="1" data-ajaxsearch="1" data-novadvancedsearch_type="top" data-instantsearch="" data-search_ssl="" data-link_search_ssl="" data-action="">
                                        <form action="{{ route('customer.products.by-search') }}" method="get" id="searchbox" class="form-novadvancedsearch">
                                            <div class="input-group">
                                                <input type="text" id="search_query_top" class="search_query ui-autocomplete-input form-control" name="search" value="" placeholder="What are you looking for (eg.mango, onion)" />
                                                <span class="input-group-btn">
                                                    <button class="btn btn-secondary" type="submit"><i
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
                                            @guest
                                                <li onclick="window.location.href= '{{ route("customer.login") }}'" style="cursor: pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in">
                                                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                                        <polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg><span>{{ __('Login') }}</span></a>
                                                </li>
                                                @if (Route::has('customer.register'))
                                                    <li onclick="window.location.href= '{{ route("customer.register") }}'" style="cursor: pointer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in">
                                                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                                                <polyline points="10 17 15 12 10 7"></polyline>
                                                                <line x1="15" y1="12" x2="3" y2="12"></line></svg><span>{{ __('Register') }}</span></li>
                                                @endif
                                            @else
                                                <li onclick="window.location.href= '{{ route('customer.profile.show') }}'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg><span>My Profile</span></li>

                                                <li onclick="window.location.href= '{{ route('customer.order.index') }}'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                        </path>
                                                    </svg><span>Orders</span></li>
                                                <li onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                        </path>
                                                    </svg><span>Logout</span></li>
                                                <form id="logout-form" action="{{ route('customer.logout') }}"
                                                      method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>
                                                <div class="ajax-alert alert" role="alert" style="display: none;">
                                                    <span id="message"> </span>
                                                    <button type="button" class="close ml-4" data-dismiss="alert"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endguest


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
                                                    <div class="cart-products-count">{{ \Cart::getContent()->count() }}</div>
                                                </div>
                                                <div class="cart-right d-flex flex-column align-self-end ml-13">
                                                    <span class="title-cart">Cart</span>
                                                    <span class="cart-item"> items</span>
                                                </div>
                                            </div>
                                            <div class="cart_block ">
                                                <div class="cart-block-content">
                                                    <div class="no-items text-center" style="width: 100%">
                                                            No products in the cart
                                                        <hr style="margin: 10px 0">
                                                        <a class="btn btn-primary" href="{{ route('customer.cart.index') }}" style="padding: 10px 15px">View All</a>
                                                        <a class="btn btn-primary" href="{{ route('customer.checkout.proceed') }}" style="padding: 10px 15px">Checkout</a>
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
