@extends('admin.layout.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header alert-primary">
                    <div class="card-header-row">
                        <h3 class="mb-0 float-left">Edit Email Template</h3>
                        <div>
                            <a href="{{ route('admin.email_templates') }}" title="Back"
                               class="btn btn-warning btn-sm font-weight-bold float-right">
                                <i class="fa fa-arrow-left mr-1"></i>Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <hr class="mg-y-10">
                    <form method="POST" action="{{ route('admin.email_templates.update',$email_template['id']) }}"
                          enctype="multipart/form-data" accept-charset="UTF-8"
                          class="form-horizontal" id="attribute_form">
                        {{ csrf_field() }}
                        @include('admin.email_templates.form', ['formMode' => 'Edit'])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



