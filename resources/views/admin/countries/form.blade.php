<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating" for="name">Name:
                <span class="tx-danger">*</span></label>

            <input type="text" name="name" id="name" list="countryName" value="{{ $edit?$country->name:old('name') }}"
                   class="form-control">
            <datalist id="countryName">
                @foreach($countryIdNames as $id=>$name)
                    <option class="gotToEdit cursor-pointer" value="{{ $name  }}" data-link="{{ route('admin.countries.edit',$id) }}">
                @endforeach
            </datalist>
            @error('name')
            <span class="tx-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating" for="code">Code:
                <span class="tx-danger">*</span></label>
            <input type="text" id="code" name="code" class="form-control" placeholder="E.g. 91"
                   value="{{ $edit?$country->code:old('code') }}">
            @error('code')
            <span class="tx-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating" for="alpha_2_code">Alpha two words Code:
                <span class="tx-danger">*</span></label>
            <input type="text" id="alpha_2_code" name="alpha_2_code" class="form-control"
                   placeholder="IN" value="{{ $edit?$country->alpha_2_code:old('alpha_2_code') }}">
            @error('alpha_2_code')
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
                        value="{{ $key }}" {{ ($edit && $country->status == $key)?'selected':'' }}>{{ $name }}</option>
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
            $('#name').change(function(){
                const name = $('#name').val();
                const link = $("option[value='" + name + "']").attr('data-link');
                console.log(link,name);
                window.location.href = link;
            });
        });
    </script>
@stop
