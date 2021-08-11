@extends('admin.layout.app')
@section('content')
    <div class="card">
        <div class="card-header alert-primary">
            <div class="card-header-row">
                <h3 class="mb-0" style="float: left">Create New Admin User</h3>
                <div style="float: right">
                    <a href="{{ route('admin.admins.index') }}" title="Back"
                       class="btn btn-warning btn-sm font-weight-bold">
                        <i class="fa fa-arrow-left mr-1"></i>Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.admins.store') }}" class="form-horizontal"
                  enctype="multipart/form-data">
                @csrf
                @include('admin.admin.form', ['formMode' => 'Create'])
            </form>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
