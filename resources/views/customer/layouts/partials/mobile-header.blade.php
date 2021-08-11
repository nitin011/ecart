<!-- mobile header -->
<div class="mobile-header">
    <nav class="navbar navbar-expand-lg navbar-light mobile">
        <a href="{{ url('/') }}">
            <img src="{{ assetUrl('theme/images/logo.png') }}" height="90px" class="logo-image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="float:right">
            <img src="{{ assetUrl('theme/images/icons/menu-black.png') }}" height="20px">
        </button>
        <div class="collapse navbar-collapse menu-item" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('customer.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.products.index') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown">
                        Categories
                    </a>
                    <div class="dropdown-menu">
                        @foreach($categories as $category)
                            <a class="dropdown-item"
                               href="{{ route('customer.products.by-category',$category['cat_id']) }}">
                                {{ $category['title'] }}
                            </a>
                        @endforeach
                    </div>
                </li>
                {{--<li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>--}}
            </ul>
        </div>

        <div class="pos-f-t fixed-right-header">
            <div class="navbar">
                <div class="right-profile-section">
                    <ul class="navbar-nav right-nav">
                        <li class="nav-item search-sec dropdown custom-dropdown">
                            <a class="nav-link dropdown-toggle btn" id="navbarDropSearch" data-toggle="dropdown">
                                <img src="{{ assetUrl('theme/images/search.svg') }}">
                            </a>
                            <div class="dropdown-menu custom-dropdown-menu sub-dropdown pt-0">
                                <div>
                                    <form action="{{ route('customer.products.by-search') }}" method="get"
                                          class="input-group search-bar" role="search">
                                        <input type="search" name="search" value="{{ request('search') }}"
                                               placeholder="What are you looking for (eg.mango, onion)"
                                               class="input-group-field">
                                        <button
                                            class="see-all-btn">Search
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item shopping-cart-sec dropdown custom-dropdown">
                            <a class="nav-link dropdown-toggle mr-2" href="#" id="navbarDropCart"
                               data-toggle="dropdown">
                                <img src="{{ assetUrl('theme/images/cart.png') }}">
                                <div class="badge badge-success position-absolute cart-count"
                                     style="    margin: -8px auto auto -8px;">
                                    {{ \Cart::getContent()->count() }}
                                </div>
                            </a>
                            <div class="dropdown-menu custom-dropdown-menu sub-dropdown" id="mobile-cart-list-popup">
                                @include('customer.layouts.globals.mobile-cart-list-popup')
                            </div>
                        </li>
                        <li class="nav-item profile-sec dropdown custom-dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('customer.profile.show') }}"
                               id="navbardrop" data-toggle="dropdown">
                                <img src="{{ assetUrl('theme/images/profile.png') }}">
                            </a>
                            <div class="dropdown-menu custom-dropdown-menu sub-dropdown pt-0">
                                <div>
                                    @guest
                                        <a class="dropdown-item iq-sub-card" class="nav-link"
                                           href="{{ route('customer.login') }}">{{ __('Login') }}</a>
                                        @if (Route::has('customer.register'))
                                            <a class="dropdown-item iq-sub-card" class="nav-link"
                                               href="{{ route('customer.register') }}">{{ __('Register') }}</a>
                                        @endif
                                    @else
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white line-height">{{ $user->user_name }}</h5>
                                        </div>
                                        <a class="dropdown-item iq-sub-card"
                                           href="{{ route('customer.profile.show') }}">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <img src="{{ assetUrl('theme/images/icons/user.svg') }}"
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
                                                    <img src="{{ assetUrl('theme/images/icons/settings.svg') }}"
                                                         height="50px">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">My Orders</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item iq-sub-card"
                                           href="{{ route('customer.logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <img src="{{ assetUrl('theme/images/icons/logout.svg') }}"
                                                         height="50px">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Logout</h6>
                                                </div>
                                            </div>
                                        </a>
                                    @endguest
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </nav>
</div>
