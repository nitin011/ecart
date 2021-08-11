@extends('admin.layout.app')

@section ('content')
    <div class="row">
        <div class="col-md-12">
            <form class="forms-sample" action="{{ route('AddNewProduct') }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title float-left">Add Product</h4>
                        <div class="btn-group float-right">
                            <!-- <a href="{{ route('add-varient') }}" class="btn btn-primary"> Add Variant</a> -->
                            <a href="{{ route('productlist') }}" class="btn btn-warning"><i
                                    class="fa fa-arrow-back"></i> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Category</label>
                                    <select name="cat_id" class="form-control select2">
                                        <option disabled selected>Select Category</option>
                                        @foreach($category as $categorys)
                                            <option value="{{$categorys->cat_id}}">@if($categorys->level==1)
                                                    -@endif @if($categorys->level==2)
                                                    --@endif {{$categorys->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Product Name</label>
                                    <input type="text" name="product_name" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Quantity</label>
                                    <input type="number" name="quantity" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Unit (G/KG/Ltrs/Ml)</label>
                                    <input type="text" name="unit" class="form-control" pattern="[A-Za-z]{1-10}"
                                           title="KG/G/Ltrs/Ml etc" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">MRP</label>
                                    <input type="number" step="0.01" name="mrp" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Price</label>
                                    <input type="number" step="0.01" name="price" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form">
                                    <label class="bmd-label-floating">Product Image</label>
                                    <input type="file" name="product_image" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Description</label>
                                    <textarea type="text" name="description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary pull-center">Submit</button>
                        <a href="{{ route('productlist') }}" class="btn">Close</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection




