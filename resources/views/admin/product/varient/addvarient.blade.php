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
            <form class="forms-sample" action="{{ route('AddNewvarient') }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title float-left">Add Variant</h4>
                        <div class="btn-group float-right">
                            <a href="{{ route('variant', $id)}}" class="btn btn-warning">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">MRP</label>
                                    <input type="hidden" name="id" value="{{$id}}">
                                    <input type="number" step="0.01" class="form-control" id="exampleInputName1"
                                           name="mrp" placeholder="Enter MRP">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Quantity</label>
                                    <input type="number" name="quantity" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Unit (G/KG/Ltrs/Ml)</label>
                                    <input type="text" name="unit" class="form-control" pattern="[A-Za-z]{1-10}"
                                           title="KG/G/Ltrs/Ml etc" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Price</label>
                                    <input type="number" step="0.01" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label class="bmd-label-floating">Varient Image</label>
                                    <input type="file" name="varient_image" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Description</label>
                                    <textarea type="text" name="description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Short Description</label>
                                    <textarea type="text" name="short_description" class="form-control"></textarea>
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
