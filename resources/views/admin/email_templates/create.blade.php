@extends('admin.layout.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header alert-primary">
                    <div class="card-header-row">
                        <h3 class="mb-0 float-left">Create Email Template</h3>
                        <div>
                            <a href="{{ route('admin.email_templates') }}" title="Back"
                               class="btn btn-warning btn-sm font-weight-bold float-right">
                                <i class="fa fa-arrow-left mr-1"></i>Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.email_templates.store') }}" class="form-horizontal">
                        {{ csrf_field() }}
                        @include('admin.email_templates.form', ['formMode' => 'Create'])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

