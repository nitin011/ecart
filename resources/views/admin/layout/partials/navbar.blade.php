<div class="az-navbar bg-gray-300">
    <div class="container">
        <div><a href="{{ assetUrl("back-theme/v2/template/index.html") }}" class="az-logo">az<span>i</span>a</a></div>
        <div class="az-navbar-search">
            <input type="search" class="form-control" placeholder="Search for anything...">
            <button class="btn"><i class="fas fa-search "></i></button>
        </div><!-- az-navbar-search -->
        <ul class="nav">
            <li class="nav-label">Main Menu</li>
            <li class="nav-item {{ request()->is('admin')?'active':null }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="typcn typcn-clipboard"></i>Dashboard</a>
            </li><!-- nav-item -->
            <li class="nav-item {{ (request()->is('admin/user*') || request()->is('admin/admins*'))?'active':null }}">
                <a href="" class="nav-link with-sub"><i class="fa fa-users"></i>User Management</a>
                <nav class="nav-sub">
                    <a href="{{ route('userlist') }}" class="nav-sub-link">Customer Management</a>
                    <a href="{{ route('admin.admins.index') }}" class="nav-sub-link">Admin Management</a>
                </nav>
            </li><!-- nav-item -->
            <li class="nav-item {{ (request()->is('admin/product*') || request()->is('admin/categor*'))?'active':null }}">
                <a href="" class="nav-link with-sub"><i class="fa fa-barcode"></i>Catalog</a>
                <nav class="nav-sub">
                    <a href="{{ route('catlist') }}" class="nav-sub-link">Category Management</a>
                    <a href="{{ route('productlist') }}" class="nav-sub-link">Product Management</a>
                </nav>
            </li><!-- nav-item -->
            <li class="nav-item @if(Request::is('admin/order*')) active @endif">
                <a href="{{ route('admin.order.index') }}" class="nav-link"><i class="fa fa-list"></i>Orders</a>
            </li>
            <li class="nav-item {{ (request()->is('admin/location*') || request()->is('admin/area*'))?'active':null }}">
                <a href="" class="nav-link with-sub"><i class="fa fa-cogs"></i>Settings</a>
                <nav class="nav-sub">
                    <a href="{{ route('admin.countries.index') }}" class="nav-sub-link">Countries</a>
                    <a href="{{ route('admin.stateOrProvince.index') }}" class="nav-sub-link">State / Province</a>
                    <a href="{{ route('admin.cities.index') }}" class="nav-sub-link">Cities</a>
                    <a href="{{ route('couponlist') }}" class="nav-sub-link">Coupons</a>
                    <a href="{{ route('admin.configuration.index') }}" class="nav-sub-link">Configurations</a>
                    <a href="{{ route('admin.email_templates') }}" class="nav-sub-link">Email Templates</a>
                    <a href="{{ route('admin.page.index') }}" class="nav-sub-link">Page Manager</a>
                    <a href="{{ route('database-settings.index') }}" class="nav-sub-link">Database Settings</a>
                </nav>
            </li><!-- nav-item -->

        {{--<li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Apps &amp; Pages</a>
            <nav class="nav-sub">
                <a href="#" class="nav-sub-link">Mailbox</a>
                <a href="#" class="nav-sub-link">Chat</a>
            </nav>
        </li>--}}<!-- nav-item -->
        </ul><!-- nav -->
    </div><!-- container -->
</div><!-- az-navbar -->
