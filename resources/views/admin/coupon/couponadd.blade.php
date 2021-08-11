@extends('admin.layout.app')

@section ('content')
    <div class="row">
        <div class="col-md-12">
            <form class="forms-sample" action="{{ route('addcoupon') }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <h4 class="card-title">Add Coupon</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('couponlist') }}" class="btn btn-warning">
                                    <i class="fa fa-arrow-left"> </i> Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coupon_name" class="bmd-label-floating">Coupon Name</label>
                                    <input type="text" name="coupon_name" id="coupon_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coupon_code" class="bmd-label-floating">Coupon Code</label>
                                    <input type="text" name="coupon_code" id="coupon_code" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="coupon_desc" class="bmd-label-floating">Description</label>
                                    <input type="text" name="coupon_desc" id="coupon_desc" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <!--<label class="bmd-label-floating">Valid From</label>-->
                                    <p class="card-description" for="valid_to">Start Date</p>
                                    <input type="datetime-local" name="valid_to" id="valid_to" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="card-description" for="valid_from">End Date</p>
                                    <input type="datetime-local" name="valid_from" id="valid_from" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p class="card-description">Minimum Cart Value</p>
                                    <input type="number" name="cart_value" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="discount_type">Discount</label>
                                    <select class="form-control form-control-sm img" id="discount_type"
                                            name="coupon_type">
                                        <option values="">Select</option>
                                        <option value="percentage">Percentage</option>
                                        <option value="price">Price</option>

                                    </select>
                                    <input type="text" class="form-control des_price" id="coupon_discount"
                                           name="coupon_discount" placeholder="Enter discount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="restriction">Uses Restriction</label>
                                    <input type="text" name="restriction" id="restriction" class="form-control"
                                           placeholder="maximum uses per user" required>
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

    <script type="text/javascript">
        $(document).ready(function () {

            $(".des_price").hide();

            $(".img").on('change', function () {
                $(".des_price").show();

            });
        });
    </script>
@endsection
