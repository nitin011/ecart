@extends('admin.layout.app')
@section('header_styles')
    <style>
        .all_error_messages {
            display: none;
        }
    </style>
@endsection
@section ('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Add Country</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group float-right">
                                <a href="{{ route('admin.countries.index') }}" class="btn btn-warning">
                                    <i class="fa fa-arrow-left"></i> &nbsp; Back
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="forms-sample" action="{{ route('admin.countries.store') }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        @include('admin.countries.form',['edit'=>false])
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary pull-center">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
