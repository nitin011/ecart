@extends('admin.layout.app')
@section('header_styles')
    <link href="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header alert-primary">
                    <h3 class="mb-0 float-left mt-0 font-weight-bold">Edit Page</h3>
                    <div>
                        <a href="{{ route('admin.page.index') }}" title="Back"
                           class="btn btn-warning btn-sm font-weight-bold float-right">
                            <i class="fa fa-arrow-left mr-1"></i>Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <hr class="mg-y-10">
                    <form method="POST" action="{{ route('admin.page.update',$page->id) }}"
                          enctype="multipart/form-data" accept-charset="UTF-8"
                          class="form-horizontal">
                        @csrf
                        @method('PATCH')
                        @include('admin.pages.form', ['formMode' => 'Edit'])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.wysiwyg_editor').summernote({});
        });
    </script>
@endsection

