@extends('admin.layout.app')
@section('content')
    <div class="row row-xs row-sm--sm">
        <div class="col-sm-6 col-md-3 mt-2">
            <div class="card card-dashboard-seventeen shadow border-0 rounded bg-purple">
                <div class="card-body">
                    <h6 class="card-title text-white">Total Customers</h6>
                    <div>
                        <h4 class="text-white">{{ $app_users }}</h4>
                        <span>
                            <a href="{{ route('userlist') }}">Total App Users</a>
                        </span>
                    </div>
                </div>
            </div>
        </div><!-- col -->
        <div class="col-sm-6 col-md-3 mt-2 mg-t-20 mg-sm-t-0">
            <div class="card card-dashboard-seventeen shadow border-0 rounded bg-gray-200">
                <div class="card-body">
                    <h6 class="card-title">Cities</h6>
                    <div>
                        <h4>{{ $city }}</h4>
                        <span>
                            <a href="{{ route('admin.cities.index') }}">Total Cities</a>
                        </span>
                    </div>
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col -->
        {{--<div class="col-sm-6 col-md-3 mt-2 mg-t-20 mg-md-t-0">
            <div class="card card-dashboard-seventeen shadow border-0 rounded bg-primary-dark tx-white">
                <div class="card-body">
                    <h6 class="card-title">Total Earning</h6>
                    <div>
                        <h4 class="text-white">{{ $total_earnings }}</h4>
                        <span class="op-7">
                            <a class="text-white" href="{{ route('finance') }}">All Earnings</a>
                        </span>
                    </div>
                </div><!-- card-body -->
            </div><!-- card -->
        </div>--}}<!-- col -->
        <div class="col-sm-6 col-md-3 mt-2 mg-t-20 mg-md-t-0">
            <div class="card card-dashboard-seventeen shadow border-0 rounded bg-primary tx-white">
                <div class="card-body">
                    <h6 class="card-title">Pending Orders</h6>
                    <div>
                        <h4 class="text-white">{{ $pending }}</h4>
                        <span class="op-7">
                            <a class="text-white" href="{{ route('admin.order.index') }}">Total Pending Orders</a>
                        </span>
                    </div>
                </div><!-- card-body -->
            </div>
        </div><!-- col -->
        <div class="col-sm-6 col-md-3 mt-2 mg-t-20 mg-md-t-0">
            <div class="card card-dashboard-seventeen shadow border-0 rounded bg-primary-dark tx-white">
                <div class="card-body">
                    <h6 class="card-title">Cancelled Orders</h6>
                    <div>
                        <h4 class="text-white">{{ $cancelled }}</h4>
                        <span class="op-7">
                            <a class="text-white" href="{{ route('admin.order.index') }}">Total Cancelled Orders</a>
                        </span>
                    </div>
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-6 col-md-3 mt-2 mg-t-20 mg-md-t-0">
            <div class="card card-dashboard-seventeen shadow border-0 rounded bg-teal tx-white">
                <div class="card-body">
                    <h6 class="card-title">Completed Orders</h6>
                    <div>
                        <h4 class="text-white">{{ $completed_orders }}</h4>
                        <span class="op-7">
                            <a class="text-white" href="{{ route('admin.order.index') }}">Completed Orders</a>
                        </span>
                    </div>
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col -->
    </div>
    {{--<div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">people</i>
                    </div>
                    <p class="card-category">Total Users</p>
                    <h3 class="card-title">{{ $app_users }}
                        <small>Users</small>
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">people</i>
                        <a href="{{ route('userlist') }}">Total App Users</a>
                    </div>
                </div>
            </div>
        </div>
        --}}{{--<div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Total Stores</p>
              <h3 class="card-title">{{$stores}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">store</i>
                <a href="{{ route('storeclist') }}">Total Stores</a>
              </div>
            </div>
          </div>
        </div>--}}{{--
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">home_work</i>
                    </div>
                    <p class="card-category">Cities</p>
                    <h3 class="card-title">{{ $city }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">home_work</i>
                        <a href="{{ route('citylist') }}">Total Cities</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">face</i>
                    </div>
                    <p class="card-category">Delivery Boys</p>
                    <h3 class="card-title">{{$delivery_boys}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">face</i>
                        <a href="{{ route('d_boylist') }}">Total Delivery Boys</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">local_atm</i>
                    </div>
                    <p class="card-category">Total Earning</p>
                    <h3 class="card-title">{{$total_earnings}} </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">local_atm</i>
                        <a href="{{ route('finance') }}">All Stores Earnings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">layers</i>
                    </div>
                    <p class="card-category">Pending Orders</p>
                    <h3 class="card-title">{{$pending}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">layers</i>
                        <a href="{{ route('admin_pen_orders') }}">Total Pending Orders</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">info_outline</i>
                    </div>
                    <p class="card-category">Cancelled Orders</p>
                    <h3 class="card-title">{{$cancelled}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">info_outline</i>
                        <a href="{{ route('admin_can_orders') }}">Total Cancelled Orders</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">face</i>
                    </div>
                    <p class="card-category">Completed Orders</p>
                    <h3 class="card-title">{{$completed_orders}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">face</i>
                        <a href="{{ route('admin_com_orders') }}">Completed Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
@section('scripts')

@endsection
