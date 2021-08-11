@php
    $img = isset($banner->image)?showBannerImage($banner->image):null;
@endphp
<div class="row row-sm mg-b-20">
    <div class="col-lg-6">
        <label class="control-label">Heading Text</label>
        {!! Form::text('heading_text', isset($banner) ? $banner->heading_text : '', ['class' => 'form-control', 'placeholder' => 'Heading Text',
                    'data-validation' => 'required', 'data-validation-error-msg' => 'Heading Text is required'] ) !!}
    </div>
    <div class="col-lg-6">
        <label class="control-label">Subheading Text</label>
        {!! Form::text('subheading_text', isset($banner) ? $banner->subheading_text : '', ['class' => 'form-control', 'placeholder' => 'Sub Heading',
                    'data-validation' => 'required', 'data-validation-error-msg' => 'Subheading is required'] ) !!}
    </div>
</div>
<div class="row row-sm mg-b-20">
    <div class="col-lg-6">
        <label class="control-label">Button Text</label>
        {!! Form::text('button_text', isset($banner) ? $banner->button_text : '', ['class' => 'form-control', 'placeholder' => 'Button Text',
                    'data-validation' => 'required', 'data-validation-error-msg' => 'Button Text is required'] ) !!}
    </div>
    <div class="col-lg-6">
        <label class="control-label">Button Link</label>
        {!! Form::text('button_link', isset($banner) ? $banner->button_link : '', ['class' => 'form-control', 'placeholder' => 'Button Link',
                    'data-validation' => 'required', 'data-validation-error-msg' => 'Button Link is required'] ) !!}
    </div>
</div>
<div class="row row-sm mg-b-20">
    <div class="col-lg-6">
        <label class="control-label">Type</label>
        {!! Form::select('type',\App\Models\Banner::TYPE, isset($banner) ? $banner->type : '', ['class' => 'form-control', 'data-validation' => 'required', 'data-validation-error-msg' => 'Type is required'] ) !!}
    </div>
    <div class="col-lg-6">
        <label class="control-label">Images</label>
        {!! Form::file('image',['class' => 'dropify', 'placeholder' => 'Image',
                    'data-default-file'=>$img,
                    'data-max-file-size'=>'3M',
                    'data-validation' => 'required', 'data-validation-error-msg' => 'Image is required'] ) !!}
    </div>
</div>
<div class="row row-sm mg-b-20">
    <div class="col-lg-6">
        <label class="control-label">
            <input type="radio" name="data_type"
                   id="categoryForm" {{ (isset($banner->category_id) && !is_null($banner->category_id))?'checked':null }}>
            &nbsp;
            Category
        </label>
        <div id="categoryInput" class="form-group w-100"
             style="display:{{ (isset($banner->category_id) && (is_null($banner->category_id)))?'none':null }} none;">
            {{ Form::select('category_id',$productCategories,isset($banner->category_id)?$banner->category_id:'',['class'=>'form-control select2','id'=>'category','placeholder'=>'Select Product Category']) }}
        </div>
    </div>
    <div class="col-lg-6">
        <label class="control-label">
            <input type="radio" name="data_type"
                   id="productTypeForm" {{ (isset($banner->list_type) && !is_null($banner->list_type))?'checked':null }}>
            &nbsp; Product
            Types</label>
        <div id="productTypeInput" class="form-group w-100"
             style="display:{{ (isset($banner->list_type) && (!is_null($banner->list_type)))?'block':'none' }}">
            <div class="row">
                <div class="col-md-12" style="display:grid">
                    {{ Form::select('list_type',\App\Models\Banner::PRODUCTS_TYPE,isset($banner->list_type)?$banner->getOriginal('list_type'):'',['class'=>'form-control select2','id'=>'list_type','placeholder'=>'Select List Type']) }}
                </div>
                <div class="col-md-6 min-max"
                     style="display:{{ (isset($banner->list_type)&& $banner->list_type == 'product_with_discount')?'block':'none' }}">
                    <label> Min Discount Value</label>
                    {{ Form::text('min_discount_value',isset($banner->min_discount_value)?$banner->min_discount_value:null,['class'=>'form-control']) }}
                </div>
                <div class="col-md-6 min-max"
                     style="display: {{ (isset($banner->list_type)&& $banner->list_type == 'product_with_discount')?'block':'none' }}">
                    <label> Max Discount Value</label>
                    {{ Form::text('max_discount_value',isset($banner->max_discount_value)?$banner->max_discount_value:null,['class'=>'form-control']) }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group mb-0 text-right">
    <button type="submit" class="btn btn-primary px-5">{{ $formMode }}</button>
</div>
