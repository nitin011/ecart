@extends('admin.layout.app')
<script src="//code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"></script>
<style>
    #map {
        height: 100%;
    }

    .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
    }

    #pac-input:focus {
        border-color: #4d90fe;
    }

    .pac-container {
        font-family: Roboto;
    }

    #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
    }

    #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }
</style>
@section ('content')
    <div class="col-md-12">
        <form class="forms-sample" action="{{ route('societyadd') }}" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title float-left">Add Area</h4>
                    <div class="btn-group float-right">
                        <a href="{{ route('societylist') }}" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Back </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="row mt-3 mx-1">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city_id">City</label>
                                <select class="form-control form-control-sm" id="city_id " name="city">
                                    @foreach($city as $cities)
                                        <option value="{{$cities->city_id}}"
                                                data-cityName="{{ strtolower($cities->city_name) }}">{{$cities->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="autocomplete">Area</label>
                                <input type="text" class="form-control" id="autocomplete" name="society"
                                       placeholder="Society Name"><br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="latitude">Latitude</label>
                            <input type="text" id="latitude" class="form-control" name="latitude">
                        </div>
                        <div class="col-md-6">
                            <label for="longitude">Longitude</label>
                            <input type="text" id="longitude" class="form-control" name="longitude">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="card-footer text-right mt-3">
                        <button type="submit" class="btn btn-primary pull-center">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    {{-- javascript code --}}
    <script src="https://maps.googleapis.com/maps/api/js?key={{ $map }}&libraries=places&callback=initMap"
            async defer></script>
    <script>
        var city = '{{ strtolower($city[0]->city_name) }}';

        $('#city_id').change(function () {
            city = $(this).find(':selected').data('cityName');
        });
        $(document).ready(function () {
            $("#lat_area").addClass("d-none");
            $("#long_area").addClass("d-none");
        });
    </script>
    <script>
        var options = {
            // types: ['(cities))'],
            componentRestrictions: {country: ["gb", "in"]}
        };

        function initMap() {
            google.maps.event.addDomListener(window, 'load', initialize);
        }

        function initialize() {
            var input = document.getElementById('autocomplete');
            var autocomplete = new google.maps.places.Autocomplete(input, options);
            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());
                $("#lat_area").removeClass("d-none");
                $("#long_area").removeClass("d-none");
                console.log(place);
            });
        }
    </script>

@endsection
