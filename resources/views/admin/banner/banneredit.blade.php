@extends('admin.layout.app')

@section ('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @include('customer.layouts.partials.flash_messages')
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Update Banner</h4>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" action="{{ route('bannerupdate',$banner->banner_id)}}" method="post"
                              enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Banner Name</label>
                                        <input type="text" name="banner_name" value="{{ $banner->banner_name }}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Banner Type</label>
                                        {{ Form::select('type',\App\Models\Banner::BANNER_TYPES,$banner->type,['class'=>'custom-select']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sub Title</label>
                                        <input type="text" name="sub_title" value="{{ $banner->sub_title }}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Button Title</label>
                                        <input type="text" name="button_title" value="{{ $banner->button_title }}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Button Route Name</label>
                                        <input type="text" name="button_route" value="{{ $banner->button_route }}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Slogan</label>
                                        <input type="text" name="slogan" value="{{ $banner->slogan }}"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="{{ assetUrl($banner->banner_image) }}"
                                         alt="{{ $banner->banner_name }}" width="400px">
                                    <div class="form">
                                        <label class="bmd-label-floating"> Image</label>
                                        <input type="file" name="banner_image" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-center">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
