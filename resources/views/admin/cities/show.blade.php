@extends('admin.layout.app')
@section ('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title float-left">Country Details</h4>
                    <div class="btn-group float-right">
                        <a href="{{ route('admin.countries.index') }}" class="btn btn-warning"><i
                                class="fa fa-arrow-left"> </i> Back</a>
                        <a href="{{ route('admin.countries.edit',$country->id) }}" class="btn btn-success"><i
                                class="fa fa-edit"> </i> Edit</a>
                        <a href="#" onclick="confirmPureDelete('{{ route('admin.countries.destroy',$country->id) }}')"
                           class="btn btn-danger"><i
                                class="fa fa-trash"> </i> Edit</a>
                    </div>
                </div>
            </div>
            <table class="table table-hover table-striped" id="dataTable">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Alpha 2 Code</th>
                    <th>Cities total</th>
                    <th class="text-right">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $country->name }}</td>
                    <td>{{ $country->code }}</td>
                    <td>{{ strtoupper($country->alpha_2_code) }}</td>
                    <td>{{ $country->cities->count()??'0' }}</td>
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
