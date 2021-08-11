@extends('admin.layout.app')
@section('header_styles')
    <script src="//code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <link href="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('content')
    <form action="{{ route('admin.configuration.update') }}" method="post"
          enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Site Configurations</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-active">
                    <thead class="thead-dark">
                    <tr>
                        <th class="bg-primary py-3">ID</th>
                        <th class="bg-primary py-3">Title<small>(key)</small></th>
                        <th class="bg-primary py-3">Description</th>
                        <th class="bg-primary py-3">Value</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($settings as $setting)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $setting->title }}<small>({{ $setting->key }})</small></td>
                            <td>{{ $setting->description }}</td>
                            <td style="display: flex; text: right; width:400px;">
                                @include('admin.configuration.partials.settings_fields')
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="text-right">
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
    <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.wysiwyg_editor').summernote();
        });
    </script>
@endsection
