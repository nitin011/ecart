@extends('admin.layout.app')
@section('content')
    <div class="card">
        <div class="card-header alert-primary">
            <div class="card-header-row">
                <h3 class="card-title float-left">Edit Admin User</h3>
                <div class="btn-group float-right">
                    <a href="{{ route('admin.admins.index') }}" title="Back"
                       class="btn btn-warning btn-sm font-weight-bold">
                        <i class="fa fa-arrow-left mr-1"></i>Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <hr class="mg-y-10">
            <form method="POST" action="{{ route('admin.admins.update',$user['id']) }}"
                  enctype="multipart/form-data" accept-charset="UTF-8"
                  class="form-horizontal" id="attribute_form">
                @csrf
                @method('PATCH')
                @include('admin.admin.form', ['formMode' => 'Edit'])
            </form>
        </div>
    </div>
@endsection
