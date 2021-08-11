<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-lg-12">
                <label class="control-label">Full Name</label>
                {!! Form::text('name', isset($user) ? $user->name : '', ['class' => 'form-control', 'placeholder' => 'Full Name',
                            'data-validation' => 'required', 'data-validation-error-msg' => 'Full Name is required'] ) !!}
            </div>
            <div class="col-lg-12">
                <label class="control-label">Email</label>
                {!! Form::text('email', isset($user) ? $user->email : '', ['class' => 'form-control', 'placeholder' => 'Email Address',
                            'data-validation' => 'required', 'data-validation-error-msg' => 'Email is required'] ) !!}
            </div>
        </div>
    </div>
    {{--<div class="col-md-6">
        <label for="image" class="control-label">Name</label>
        <input type="file" name="image" class="form-control dropify"
               data-default-image="{{ isset($user)?$user->image_url:null }}" data-height="200">
    </div>--}}
</div>
<div class="form-group mb-0 text-right">
    <button type="submit" class="btn btn-primary px-5">{{ $formMode }}</button>
</div>
