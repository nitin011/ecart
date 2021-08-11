<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating" for="name">Name:
                <span class="tx-danger">*</span>
            </label>
            <input type="text" name="name" id="name" list="statesOrProvincesIdName"
                   value="{{ $edit?$stateOrProvince->name:old('name') }}"
                   class="form-control">
            <datalist id="statesOrProvincesIdName">
                @foreach($statesOrProvincesIdName as $id => $name)
                    <option class="gotToEdit cursor-pointer" value="{{ $name  }}"
                            data-link="{{ route('admin.stateOrProvince.edit',$id) }}">
                @endforeach
            </datalist>
            @error('name')
            <span class="tx-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating" for="country_id">
                Country Name:
                <span class="tx-danger">*</span></label>
            {{--<input type="text" id="country_id" name="country_id" class="form-control" placeholder="Country Name"
                   value="{{ $edit?$stateOrProvince->country->name:old('country_id') }}">--}}
            <select name="country_id" id="country_id" class="form-control">
                @foreach($countryIdNames as $countryId => $countryName)
                    <option
                        value="{{ $countryId }}" {{ $edit?($stateOrProvince->country_id == $countryId?'selected':''):'' }}>
                        {{ $countryName }}
                    </option>
                @endforeach
            </select>
            @error('country_id')
            <span class="tx-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating" for="status">Status:
                <span class="tx-danger">*</span></label>
            <select type="text" id="status" name="status" class="form-control">
                @foreach(\App\Models\StateOrProvince::STATUS as $key=>$name)
                    <option
                        value="{{ $key }}" {{ ($edit && $stateOrProvince->status == $key)?'selected':'' }}>{{ $name }}</option>
                @endforeach
            </select>
            @error('status')
            <span class="tx-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#name').change(function () {
                const name = $('#name').val();
                const link = $(".gotToEdit[value='" + name + "']").attr('data-link');
                console.log(link, name);
                window.location.href = link;
            });
        });
    </script>
@stop
