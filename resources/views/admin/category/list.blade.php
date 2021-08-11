@extends('admin.layout.app')
@section ('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title ">Category List</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('AddCategory') }}" class="btn btn-info float-right p-auto"
                               style="padding: 7px 12px">
                                Add Category
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Cat Name</th>
                                <th>Parent Category</th>
                                <th>Image</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($category as $cat)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{$cat->title}}</td>
                                    @if($cat->parent == 0)
                                        <td>---</td>
                                    @endif
                                    @if($cat->parent != 0)
                                        <td>{{$cat->tttt}}</td>
                                    @endif
                                    <td><img src="{{$cat->image_url }}" alt="category image"
                                             style="width:50px; height:50px; border-radius:50%;"/></td>
                                    <td class="td-actions text-right">
                                        <a href="{{ route('EditCategory',$cat->cat_id)}}" rel="tooltip"
                                           class="btn btn-success">
                                            <i class="fa fa-edit" title="Edit Category"></i>
                                        </a>
                                        <a href="{{ route('DeleteCategory',$cat->cat_id)}}" rel="tooltip"
                                           class="btn btn-danger">
                                            <i class="fa fa-trash" title="Delete Category"></i>
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
                <div class="card-footer">
                    {{ $category->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#data-table').dataTable({
            "paging": false
        });
    </script>
@endsection
