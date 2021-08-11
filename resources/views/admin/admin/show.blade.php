@extends('admin.layout.app')
@section('content')
    <div class="card">
        <div class="card-header alert-primary">
            <div class="card-header-row">
                <h3 class="card-title float-left">Admin Details</h3>
                <div class="btn-group float-right">
                    <a href="{{ route('admin.admins.index') }}"
                       class="btn btn-warning btn-sm font-weight-bold" title="Back">
                        <i class="fa fa-arrow-left mr-1"></i> Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="display responsive nowrap dataTable no-footer dtr-inline">
                    <tr>
                        <th>User Name</th>
                        <td>{{ $admin->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $admin->email }}</td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{ $admin->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ $admin->updated_at }}</td>
                    </tr>
                    <tr>
                        <th>Actions</th>
                        <td>
                            @include('admin.admin.partials.action',['data'=>$admin])
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
