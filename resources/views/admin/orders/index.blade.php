@extends('admin.layout.app')
@section('page_title','Orders')
@section('header_styles')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-header">
                    <h3 class="mb-0 text-body">Orders List</h3>
                    <a class="btn btn-info" style="position:absolute;top:10px;right:15px;" href="{{ route('admin.order.get.create') }}"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body px-0">
                    <table id="data-table" class="display responsive nowrap dataTable">
                        <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Total Amount</th>
                            <th>Order Date</th>
                            <th>Delivery Date</th>
                            <th>Time Slot</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        let dataTableUrl = '{{ route('admin.order.index') }}';
    </script>
    <script src="{{ assetUrl('back-theme/modules/order/index.js') }}"></script>
@endsection
