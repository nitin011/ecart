<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h4 class="mb-0 p-2" style="background-color: #70737c; color: #fff;">
                    User and Product
            </h4>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <div class="row row-sm mg-b-10 pt-3">
                    <div class="col-lg-4">
                        <label class="control-label">User</label>
                        <select class="form-control" id="user-record" name="user">
                            <option value="">Select User</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label class="control-label">Product</label>
                        <select class="form-control" name="products[]" id="product" multiple>
                            <option value="">Select Product</option>
                            @foreach($products as $product)
                                @foreach($product->variants as $child)
                                    <option value="{{$child->varient_id}}" style="font-weight: 600">{{ $product->product_name }}</option>
                                @endforeach
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 mt-3" id="address"></div>
                    <div class="col-12 text-center pt-4">
                        <button type="button" class="btn btn-primary next" data-type="user_product">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h4 class="mb-0 p-2" style="background-color: #70737c; color: #fff;">
                Product Details
            </h4>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <div class="row row-sm mg-b-10 pt-3">
                    <div class="col-md-12" id="product-table"></div>
                    <div class="col-12 text-center pt-4">
                        <button type="button" class="btn btn-primary previous" data-type="user_product">Prev</button>
                        <button type="button" class="btn btn-primary next" data-type="product_details">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h4 class="mb-0 p-2" style="background-color: #70737c; color: #fff;">
                Order Details
            </h4>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                <div class="row row-sm mg-b-10 pt-3">
                    <div class="col-md-12" id="order_details"></div>
                    <div class="col-12 text-center pt-4">
                        <button type="button" class="btn btn-primary previous" data-type="product_details">Prev</button>
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
