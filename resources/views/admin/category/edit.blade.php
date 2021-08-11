@extends('admin.layout.app')

@section ('content')
    <div class="row">
        <div class="col-md-12">
            <form class="forms-sample" action="{{ route('UpdateCategory', $cat->cat_id)}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title float-left">Edit Category</h4>
                        <div class="btn-group float-right">
                            <a href="{{ route('catlist') }}" class="btn btn-warning"><i class="fa fa-arrow-left"></i>
                                Back</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                                <p style="color:green;font-weight:bold"><i class="fa fa-info-circle"></i> If you select
                                    no parent. The category you are adding it becomes main parent category.</p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Parent Category</label>
                                            <select name="parent_id" class="form-control">
                                                <option value="0">No Parent</option>
                                                @foreach($categories as $categorys)
                                                    <option value="{{$categorys->cat_id}}"
                                                            @if ( $categorys->cat_id == $cat->parent) selected @endif>@if($categorys->level==1)
                                                            -@endif @if($categorys->level==2)
                                                            --@endif {{$categorys->title}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Category Title</label>
                                            <input type="text" value="{{$cat->title}}" name="cat_name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form">
                                            <label class="bmd-label-floating">Description</label>
                                            <textarea name="desc" class="form-control">{{$cat ->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label class="bmd-label-floating">Category Image</label>
                                    <input type="file" name="cat_image" class="form-control dropify"
                                           data-default-file="{{ $cat->image_url }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-success pull-center">Submit</button>
                        <a href="{{ route('catlist') }}" class="btn btn-secondary">Close</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')

@endsection




