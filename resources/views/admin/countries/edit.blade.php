@extends('admin.layout.app')

@section ('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Update Country</h4>
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
                <form class="forms-sample" action="{{ route('admin.countries.update',$country->id) }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                        @include('admin.countries.form',['edit'=>true])
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-success pull-center">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
