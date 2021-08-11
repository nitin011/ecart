@extends('admin.layout.app')
<style>
    sup {
        color: red;
        position: initial;
        font-size: 111%;
    }
</style>
@section ('content')
    <div class="row">
        <div class="col-md-12">
            <form class="forms-sample" action="{{ route('update-varient', $id) }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title float-left">Update Variant</h4>
                        <div class="btn-group float-right">
                            <a href="{{ route('variant',$variant->product_id) }}" class="btn btn-info">
                                Product Details
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">MRP</label>
                                    <input type="number" step="0.01" class="form-control" id="exampleInputName1"
                                           name="mrp"
                                           value="{{ $variant->mrp }}" placeholder="Enter MRP">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Quantity</label>
                                    <input type="text" name="quantity" class="form-control"
                                           value="{{ $variant->quantity }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Unit (G/KG/Ltrs/Ml)</label>
                                    <input type="text" name="unit" pattern="[A-Za-z]{1-10}" title="KG/G/Ltrs/Ml etc"
                                           class="form-control" value="{{ $variant->unit }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="price">Price</label>
                                    <input type="number" step="0.01" name="price" id="price" class="form-control"
                                           value="{{ $variant->price }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form">
                                    <label class="bmd-label-floating">Variant Image</label>
                                    <input type="file" name="varient_image" class="form-control dropify"
                                           data-default-file="{{ $variant->varient_image_url }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="description">Description</label>
                                    <textarea type="text" name="description" id="description"
                                              class="form-control">{{ $variant->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="short_description">Short Description</label>
                                    <textarea type="text" name="short_description" id="short_description"
                                              class="form-control">{{ $variant->short_description }}</textarea>

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
