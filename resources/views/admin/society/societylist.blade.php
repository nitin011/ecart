@extends('admin.layout.app')

@section ('content')
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title float-left">Area List</h4>
            <div class="btn-group float-right">
                <a href="{{ route('society') }}" class="btn btn-primary ml-auto">Add Area</a>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Area Name</th>
                        <th>City Name</th>

                        <th class="text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($city as $cities)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{$cities->society_name}}</td>
                            <td>{{$cities->city_name}}</td>

                            <td class="td-actions text-right">
                                <a href="{{ route('societyedit',$cities->society_id)}}" rel="tooltip"
                                   class="btn btn-success action-button">
                                    <i class="fa fa-edit" title="Edit Society"></i>
                                </a>
                                <a href="{{ route('societydelete',$cities->society_id)}}"
                                   onClick="return confirm('Are You sure!')" rel="tooltip" class="btn btn-danger action-button">
                                    <i class="fa fa-trash" title="Delete"></i>
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
    </div>
@endsection
