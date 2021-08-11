@extends('admin.layout.app')
@section('content')
    <div class="card">
        <div class="card-header alert-primary">
            <div class="card-header-row">
                <h3 class="mb-0" style="float:left"><i class="fa fa-user-plus mr-1 tx-20"></i> Admin Users List</h3>
                <div style="float:right">
                    <a href="{{ route('admin.admins.create') }}" title="Add New"
                       class="btn btn-primary btn-sm font-weight-bold">
                        <i class="fa fa-plus mr-1"></i>Add New Admin User
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body px-0">
            <div class="table-responsive" style="display: contents">
                <table id="data-table" class="display responsive nowrap dataTable no-footer dtr-inline">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        let dataTableUrl = '{{ route('admin.admins.index') }}';
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: dataTableUrl,
                },
                columns: [
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]
            });
        });
    </script>
@endsection
