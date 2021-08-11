@extends('admin.layout.app')
@section ('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title float-left">Cities List</h4>
                    <div class="btn-group float-right">
                        <a href="{{ route('admin.cities.create') }}" class="btn btn-primary">Add City</a>
                    </div>
                </div>
            </div>
            <table class="table table-hover table-striped" id="dataTable">
                <thead>
                <tr>
                    <th class="">#</th>
                    <th>Name</th>
                    <th>State / Province</th>
                    <th>Country</th>
                    <th>Status</th>
                    <th class="text-right">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($cities as $city)
                    <tr>
                        <td class="">{{ $loop->iteration }}</td>
                        <td>{{ $city->name }}</td>
                        <td>{{ $city->stateOrProvince->name??'--' }}</td>
                        <td>{{ $city->country->name }}</td>
                        <td>{{ \App\Models\City::STATUS[$city->status] }}</td>
                        <td class="td-actions text-right">
                            <a href="{{ route('admin.cities.create',['id'=>$city->id])}}" rel="tooltip"
                               class="btn btn-success">
                                <i class="fa fa-edit" title="Edit"></i>
                            </a>
                            <a href="#"
                               onclick="confirmPureDelete('{{ route('admin.cities.destroy',$city->id)}}')"
                               rel="tooltip" class="btn btn-danger">
                                <i class="fa fa-trash" title="Delete Country"></i>
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
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#dataTable').dataTable();
        })
    </script>
@stop
