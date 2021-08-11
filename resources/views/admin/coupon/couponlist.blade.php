@extends('admin.layout.app')
@section ('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h4 class="">Coupon List</h4>
                        </div>
                        <div class="col-lg-6 text-right">
                            <a href="{{ route('coupon') }}" class="btn btn-primary ml-auto">
                                <i class="fa fa-plus"> </i>&nbsp; Add Coupon
                            </a>
                        </div>
                    </div>

                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Coupon Name</th>
                        <th>Discount Value</th>
                        <th>Amount Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Uses Limit Per User</th>
                        <th>Cart Value</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($coupon as $cities)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $cities->coupon_name }}</td>
                            <td>{{ $cities->amount }}</td>
                            <td>{{ $cities->type }}</td>
                            <td>{{ $cities->start_date }}</td>
                            <td>{{ $cities->end_date }}</td>
                            <td>{{ $cities->uses_restriction }}</td>
                            <td>{{ $cities->cart_value }}</td>

                            <td class="td-actions text-center">
                                <a href="{{ route('editcoupon',$cities->coupon_id) }}" rel="tooltip"
                                   class="btn btn-success action-button">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a onclick="confirmPureDelete('{{ route('deletecoupon',$cities->coupon_id) }}');"
                                   href="#" rel="tooltip"
                                   class="btn btn-danger action-button">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No data found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div class="pagination justify-content-end" align="right"
                     style="width:100%;float:right !important">{{$coupon->links()}}</div>
            </div>
        </div>
    </div>
@endsection
