@extends('admin.layout.app')
@section ('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title float-left">Variant List</h4>
                    <div class="btn-group float-right">
                        <a href="{{ route('add-varient', $id)}}" class="btn btn-primary ml-auto">
                            <i class="fa fa-plus"></i> Add Variant</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Quantity</th>
                                <th>Unit</th>
                                <th>Variant Image</th>
                                <th>Description</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($variants as $variant)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{$variant->quantity}}</td>
                                    <td> {{$variant->unit}}</td>
                                    <td><img src="{{ $variant->varient_image_url }}" alt="image"
                                             style="width:50px;height:50px; border-radius:50%"/></td>
                                    <td> {{$variant->description}}</td>
                                    <td class="td-actions text-right">
                                        <a href="{{ route('edit-varient',$variant->varient_id)}}" rel="tooltip"
                                           class="btn btn-success">
                                            <i class="fa fa-edit" data-tooltip="Edit Variant"></i>
                                        </a>
                                        <a href="{{ route('delete-varient',$variant->varient_id) }}" rel="tooltip"
                                           class="btn btn-danger">
                                            <i class="fa fa-trash" data-tooltip="Delete variant."></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No Variants found</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    {{ $variants->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
