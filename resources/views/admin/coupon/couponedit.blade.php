@extends('admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form class="forms-sample" action="{{ route('updatecoupon') }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <h4 class="card-title">Edit Coupon Details</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('couponlist') }}" class="btn btn-warning action-button">
                                    <i class="fa fa-arrow-left"> </i> &nbsp; Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Coupon Name</label>
                                    <input type="hidden" name="coupon_id" value="{{$coupon->coupon_id}}">
                                    <input type="text" value="{{$coupon->coupon_name}}" name="coupon_name"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Coupon Code</label>
                                    <input type="text" value="{{$coupon->coupon_code}}" name="coupon_code"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Description</label>
                                    <input type="text" value="{{$coupon->coupon_description}}" name="coupon_desc"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <!--<label class="bmd-label-floating">Valid From</label>-->
                                    <p class="card-description">Valid To</p>
                                    <input type="datetime-local" value="{{$coupon->start_date}}" name="valid_to"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <!--<label class="bmd-label-floating">Valid To</label>-->
                                    <p class="card-description">Valid From</p>
                                    <input type="datetime-local" value="{{$coupon->end_date}}" name="valid_from"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <!--<label class="bmd-label-floating">Minimum Cart Value</label>-->
                                    <p class="card-description">Minimum Cart Value</p>
                                    <input type="number" value="{{$coupon->cart_value}}" name="cart_value"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="discount_type">Discount Type</label>
                                    <select class="form-control form-control-sm img" id="discount_type"
                                            value="{{$coupon->type}}" name="coupon_type">
                                        <!--<option values="">Select</option>-->
                                        <option value="percentage"
                                                @if($coupon->type == 'percentage' || $coupon->type == 'Percentage' ||$coupon->type == 'PERCENTAGE') selected @endif>
                                            Percentage
                                        </option>
                                        <option value="price"
                                                @if($coupon->type == 'price'|| $coupon->type == 'Price' ||$coupon->type == 'PRICE') selected @endif>
                                            Price
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="coupon_discount">Discount Value</label>
                                    <input type="text" class="form-control " id="coupon_discount"
                                           value="{{$coupon->amount}}" name="coupon_discount"
                                           placeholder="Enter discount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect3">Uses Restriction</label>
                                    <input type="text" name="restriction" class="form-control"
                                           value="{{$coupon->uses_restriction}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary pull-center">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".des_price").hide();
            $(".img").on('change', function () {
                $(".des_price").show();
            });
        });
    </script>
@stop
