<div class="card mb-2 create-address-card">
    <div class="card-body">
        <div class="row">
            {{ Form::hidden('user_id',auth()->user()->user_id) }}
            <div class="col-lg-3 col-md-3">
                <div class="form-group">
                    <label for="first_name">First Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="first_name"
                           value="{{ $address->first_name??old('first_name') }}" id="first_name">
                    @error('first_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name"
                           value="{{ $address->last_name??old('last_name') }}" id="last_name">

                    @error('last_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="house_or_flat_no">Flat/House No.<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="house_or_flat_no"
                           value="{{ $address->house_or_flat_no??old('house_or_flat_no') }}" id="house_or_flat_no">
                    @error('house_or_flat_no')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="receiver_phone">Receiver Phone<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="receiver_phone"
                           value="{{ $address->receiver_phone??old('receiver_phone') }}" id="receiver_phone">
                    @error('receiver_phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{--<div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="landmark">Landmark</label>
                    <input type="text" class="form-control" name="landmark"
                           value="{{ $address->landmark??null }}" id="landmark">
                </div>
            </div>--}}
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="address_line_1">Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="address_line_1"
                           value="{{ $address->address_line_1??old('address_line_1') }}" id="address_line_1">
                    @error('address_line_1')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="address_line_2">Address Line 2</label>
                    <input type="text" class="form-control" name="address_line_2"
                           value="{{ $address->address_line_2??old('address_line_2') }}" id="address_line_2">
                    @error('address_line_2')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="form-group">
                    <label for="post_code">Postcode<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="post_code"
                           value="{{ $address->post_code??old('post_code') }}" id="post_code">
                    @error('post_code')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="form-group">
                    <label for="city_id">City<span class="text-danger">*</span></label>
                    <select name="city_id" id="city_id" class="form-control">
                        @foreach($cities as $city)
                            <option
                                value="{{ $city->id }}"
                                {{ isset($address)?($address->city_id == $city->id?'selected':''):(old('city_id') == $city->id?'selected':'') }}>
                                {{ ucfirst($city->name) }} / {{ ucfirst($city->country->name) }}
                            </option>
                        @endforeach
                    </select>
                    @error('city_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{--<div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="society">Society</label>
                    <input type="text" class="form-control" name="society"
                           value="{{ $address->society??null }}" id="society">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" name="state"
                           value="{{ $address->state??null }}" id="state">
                </div>
            </div>--}}

        </div>
    </div>
</div>
