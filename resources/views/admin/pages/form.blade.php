<div class="row row-sm mg-b-20">
    <div class="col-lg-6">
        {!! Form::text('title', isset($page) ? $page->title : '', ['class' => 'form-control', 'placeholder' => 'Title',
                    'data-validation' => 'required', 'data-validation-error-msg' => 'Title is required'] ) !!}
    </div>
    <div class="col-lg-6">
        {!! Form::text('slug', isset($page) ? $page->slug : '', ['class' => 'form-control', 'placeholder' => 'Slug',
                    'data-validation' => 'required', 'data-validation-error-msg' => 'Slug is Required'] ) !!}
    </div>
</div>

<div class="row row-sm mg-b-20 mt-3">
    <div class="col-lg-12 ">
        <label class="control-label">Content</label>
        <textarea class="form-control wysiwyg_editor" rows="5" name="content">{!! isset($page) ? $page['content'] : '' !!}</textarea>
    </div>
</div>
<div class="form-group mb-0 text-right">
    <button type="submit" class="btn btn-primary px-5">{{ $formMode }}</button>
</div>
