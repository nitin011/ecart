@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header alert-primary">
                <div class="card-header-row">
                    <h3 class="mb-0" style="float:left"><i class="fa fa-envelope mr-1 tx-20"></i> Email Templates List
                    </h3>
                    <div style="float:right">
                        <a href="{{ route('admin.email_templates.add') }}" title="Add New"
                           class="btn btn-primary btn-sm font-weight-bold">
                            <i class="fa fa-plus mr-1"></i>Add New
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display responsive nowrap dataTable no-footer dtr-inline">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Subject</th>
                            <th>Action</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($email_templates as $email_template)
                            <tr>
                                <td>{{ $email_template['title'] }}</td>
                                <td>{{ $email_template['subject'] }}</td>
                                <td>{{ $email_template['action'] }}</td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.email_templates.edit',$email_template['id']) }}"
                                           class="btn btn-sm btn-success action-button">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('admin.email_templates.delete',$email_template['id']) }}"
                                           onclick="return confirm('Are you sure, you want to delete this record?')"
                                           class="btn btn-sm btn-danger action-button">
                                            <i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
