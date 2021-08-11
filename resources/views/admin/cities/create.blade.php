@extends('admin.layout.app')
@section('header_styles')
    <style>
        .all_error_messages {
            display: none;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header card-header-primary">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Add / Update City</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group float-right">
                                <a href="{{ route('admin.cities.index') }}" class="btn btn-warning">
                                    <i class="fa fa-arrow-left"></i> &nbsp; Back
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="forms-sample" action="{{ route('admin.cities.store') }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="name">Name:
                                        <span class="tx-danger">*</span></label>

                                    <input type="text" name="name" id="name" list="cityName"
                                           value="{{ !is_null($city)?$city->name:old('name') }}"
                                           class="form-control">
                                    <datalist id="cityName">
                                        @foreach($countryIdNames as $id=>$name)
                                            <option class="gotToEdit cursor-pointer" value="{{ $name  }}"
                                                    data-link="{{ route('admin.cities.create',$id) }}">
                                        @endforeach
                                    </datalist>
                                    @error('name')
                                    <span class="tx-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="state_or_province_id">State / Province:
                                        <span class="tx-danger">*</span></label>
                                    <select name="state_or_province_id" id="state_or_province_id" class="form-control">
                                        <option value="">-- Select --</option>
                                        @foreach($statesOrProvincesIdName as $id=>$name)
                                            <option
                                                value="{{ $id  }}" {{ !is_null($city)?($city->state_or_province_id == $id?'selected':''):'' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                    @error('state_or_province_id')
                                    <span class="tx-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="country_id">Country:
                                        <span class="tx-danger">*</span></label>

                                    <select name="country_id" id="country_id" class="form-control">
                                        @foreach($countryIdNames as $id=>$name)
                                            <option
                                                value="{{ $id  }}" {{ !is_null($city)?($city->country_id == $id?'selected':''):'' }}>
                                                {{ $name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('country_id')
                                    <span class="tx-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="status">Status:
                                        <span class="tx-danger">*</span></label>
                                    <select type="text" id="status" name="status" class="form-control">
                                        @foreach(\App\Models\Country::STATUS as $key=>$name)
                                            <option
                                                value="{{ $key }}" {{ (!is_null($city) && $city->status == $key)?'selected':'' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                    @error('status')
                                    <span class="tx-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary pull-center">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {{--<script>
        $(document).ready(function () {
            $('#name').change(function () {
                const name = $('#name').val();
                const link = $("option[value='" + name + "']").attr('data-link');
                console.log(link, name);
                window.location.href = link;
            });
        });
    </script>--}}
@stop
