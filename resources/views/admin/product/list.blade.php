@extends('admin.layout.app')

@section ('content')
    <div class="row">
        <div class="col-lg-12">
            @include('admin.layout.partials.flash_messages')
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title float-left">Products List</h4>
                    <div class="btn-group float-right">
                        <a href="{{ route('AddProduct') }}" class="btn btn-primary ml-auto">Add Product</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-active">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Product Image</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($product as $products)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{$products->product_name}}</td>
                                    <td> {{ $products->category->title??'--' }}</td>
                                    <td><img src="{{ $products->product_image_url }}" alt="image"
                                             style="width:50px;height:50px; border-radius:50%"/></td>
                                    <td class="td-actions text-right">
                                        <a href="{{ route('EditProduct',$products->product_id)}}" rel="tooltip"
                                           class="btn btn-success">
                                            <i class="fa fa-edit" title="Edit Product"></i>
                                        </a>
                                        <a href="{{ route('variant',$products->product_id)}}" rel="tooltip"
                                           class="btn btn-primary">
                                            <i class="fa fa-eye" title="layers"></i>
                                        </a>
                                        <a href="{{ route('DeleteProduct',$products->product_id)}}" rel="tooltip"
                                           class="btn btn-danger">
                                            <i class="fa fa-trash" title="Delete product"></i>
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
                    </div>
                </div>
                <div class="card-footer" align="right">
                    {{$product->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
