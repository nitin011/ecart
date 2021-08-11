@extends('admin.layout.app')

@section ('content')
    <div class="row">
        <div class="col-md-12">
            <form class="forms-sample" action="{{ route('UpdateProduct', $product->product_id)}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title float-left">Edit Product</h4>
                        <div class="btn-group float-right">
                            <a href="{{ route('productlist') }}" class="btn btn-warning"
                               data-title="Back to Products list page.">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Product Name</label>
                                    <input type="text" value="{{$product->product_name}}" name="product_name"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form">
                                    <label class="bmd-label-floating">Product Image</label>
                                    <input type="file" name="product_image" class="form-control dropify"
                                           data-default-file="{{ $product->product_image_url }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-success pull-center">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection




