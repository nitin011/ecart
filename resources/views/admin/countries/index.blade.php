@extends('admin.layout.app')
@section ('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title float-left">Countries List</h4>
                    <div class="btn-group float-right">
                        <a href="{{ route('admin.countries.create') }}" class="btn btn-primary">Add Country</a>
                    </div>
                </div>
            </div>
                <table class="table table-hover table-striped" id="dataTable">
                    <thead>
                    <tr>
                        <th class="">#</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Alpha 2 Code</th>
                        <th>Cities <small>(Total / Active)</small></th>
                        <th>States <small>(Total / Active)</small></th>
                        <th>Status</th>
                        <th class="text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($countries as $country)
                        <tr>
                            <td class="">{{ $loop->iteration }}</td>
                            <td>{{ $country->name }}</td>
                            <td>{{ $country->code }}</td>
                            <td>{{ strtoupper($country->alpha_2_code) }}</td>
                            <td>{{ ($country->cities->count()??'0').' / '.$country->activeCities }}</td>
                            <td>{{ ($country->statesOrProvinces->count()??'0').' / '.$country->activeStatesOrProvinces }}</td>
                            <td>{{ \App\Models\Country::STATUS[$country->status] }}</td>
                            <td class="td-actions text-right">
                                <a href="{{ route('admin.countries.edit',$country->id)}}" rel="tooltip"
                                   class="btn btn-success">
                                    <i class="fa fa-edit" title="Edit"></i>
                                </a>
                                <a href="#"
                                   onclick="confirmPureDelete('{{ route('admin.countries.destroy',$country->id)}}')"
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
