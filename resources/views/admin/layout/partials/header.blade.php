<div class="az-header bg-info">
    <div class="container">
        <div class="az-header-left">
            <a href="{{ url("admin") }}" class="az-logo">{{ config('app.name') }}</a>
            <a href="" id="azNavShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <!-- az-header-center -->
        <div class="az-header-right">
            <div class="dropdown az-profile-menu">
                <a href="" class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></a>
                <div class="dropdown-menu">
                    <div class="az-dropdown-header d-sm-none">
                        <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                    </div>
                    <div class="az-header-profile">
                        <div class="az-img-user">
                            <img src="https://via.placeholder.com/500x500" alt="">
                        </div><!-- az-img-user -->
                        <h6>{{ ucfirst(auth()->guard('admin')->user()->name) }}</h6>
                    </div><!-- az-header-profile -->

                    <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                    <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                    {{--<a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>--}}
                    <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                    <a href="{{ route('admin.logout') }}" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
                </div><!-- dropdown-menu -->
            </div>
        </div><!-- az-header-right -->
    </div><!-- container -->
</div><!-- az-header -->
