@extends('admin.layout.app')
@section('header_styles')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <span class="card-title">
                                Import Products
                            </span>
                        </div>
                        <div class="card-body">
                            <p>{{ session('status') }}</p>
                            <form method="POST" action="{{ route("admin.products.import") }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group{{ $errors->has('excel_file') ? ' has-error' : '' }}">
                                    <label for="file" class="label">CSV file to import</label><br/>
                                    <input id="file" type="file" name="excel_file" required>
                                    @if ($errors->has('excel_file'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('excel_file') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <p>
                                    <button type="submit" class="btn btn-success" name="submit"><i
                                            class="fa fa-check"></i>
                                        Submit
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@stop
