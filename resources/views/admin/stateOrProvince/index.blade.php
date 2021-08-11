@extends('admin.layout.app')
@section ('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title float-left">States / Provinces List</h4>
                    <div class="btn-group float-right">
                        <a href="{{ route('admin.stateOrProvince.create') }}" class="btn btn-primary">Add State / Province</a>
                    </div>
                </div>
            </div>
                <table class="table table-hover table-striped" id="dataTable">
                    <thead>
                    <tr>
                        <th class="">#</th>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th class="text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($statesOrProvinces as $stateOrProvince)
                        <tr>
                            <td class="">{{ $loop->iteration }}</td>
                            <td>{{ $stateOrProvince->name }}</td>
                            <td>{{ $stateOrProvince->country->name }}</td>
                            <td>{{ \App\Models\Country::STATUS[$stateOrProvince->status] }}</td>
                            <td class="td-actions text-right">
                                <a href="{{ route('admin.stateOrProvince.edit',$stateOrProvince->id)}}" rel="tooltip"
                                   class="btn btn-success">
                                    <i class="fa fa-edit" title="Edit"></i>
                                </a>
                                <a onclick="confirmPureDelete('{{ route('admin.stateOrProvince.destroy',$stateOrProvince->id)}}')"
                                   rel="tooltip" class="btn btn-danger text-white">
                                    <i class="fa fa-trash" title="Delete Country"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5"><h3 class="text-center">No data found</h3></td>
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
